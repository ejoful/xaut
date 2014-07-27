<?php
	//全局可以使用的通用函数声明在这个文件中.


	/**
	 * 获取用户头像
	 * @param	int		$uid	-	传入用户 ID
	 * @return	string			-	返回用户头像
	 */
	function getFace($uid) {
		$path = './home/views/default/resource/images/userface/'.$uid.'/small.gif';
		if (file_exists($path)) {
			return $uid.'/small.gif';
		} else {
			return 'avatar.gif';
		}
	}

        /**
         * 由用户的id获取用户名
         * @param int $id
         * @return str $username
         */
        function getUsername($uid){
                $user = D("user");
                $user_list = $user->filed("username")->find();
                return $user_list["username"];
        }

	/**
	 * 获取处理后的字符串
	 * @param	string	$str	-	传入要处理的字符串
	 * @param	int		$length	-	需要显示的字符串长度
	 * @param	string	$ext	-	超出部分的替换字符串
	 * @return	string	$output	-	返回一个处理后的字符串
	 */
	function getShort($str, $length = 40, $ext = '') {
		$str = htmlspecialchars($str);
		$str = strip_tags($str);
		$str = htmlspecialchars_decode($str);
		$strlenth = 0;
		$out      = '';
		preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/", $str, $match);
		foreach($match[0] as $v){
			preg_match("/[\xe0-\xef][\x80-\xbf]{2}/",$v, $matchs);
			if(!empty($matchs[0])){
				$strlenth += 1;
			}elseif(is_numeric($v)){
				//$strlenth	+=	0.545;  // 字符像素宽度比例 汉字为1
				$strlenth += 0.5;    // 字符字节长度比例 汉字为1
			}else{
				//$strlenth	+=	0.475;  // 字符像素宽度比例 汉字为1
				$strlenth += 0.5;    // 字符字节长度比例 汉字为1
			}

			if ($strlenth > $length) {
				$output .= $ext;
				break;
			}

			$output .= $v;
		}
		return $output;
	}

	/**
	 * 添加用户动态
	 * @param int	 $uid	-	用户 ID
	 * @param int	 $hid	-	动态对象 ID
	 * @param int	 $type	-	动态类型
	 * @param string $content	-	动态内容
	 * @param int	 $time	-	动态产生时间
	 */
	function addToHistory($uid, $hid, $type, $content, $time) {
		$userHistory = D('user_history');
        	$harr = array();
		$harr['uid'] = $uid;
		$harr['hid'] = $hid;
		$harr['type'] = $type;
		$harr['content'] = $content;
		$harr['addtime'] = $time;
		$userHistory->insert($harr);
	}

	function getComments($where, $goodsResults) {

                $goods_comments = D('goods_comments');
                for ($i = 0; $i < count($goodsResults); $i++) {
                        $face = getface($goodsResults[$i]['uid']);
                        $goodsResults[$i]['face'] = $face;        //绑定每条宝贝的发表用户的头像
                        if ($goodsResults[$i]['comments'] > 0) {        //如果该条宝贝有评论
                                $comments_list = $goods_comments->field('fromuid,username,content')
                                        ->where($where)->order('addtime desc')->limit('2')->select();
                                foreach($comments_list as $k => $v) {
                                        $comments_list[$k]['face'] = getface($v['fromuid']);
                                }
                                $goodsResults[$i]['comments_list'] = $comments_list;    //商品的两条评论
                        }

                }

	}

	/**
	 * 生成新的专辑封面
	 * @param int $aid	-	要重新生成封面的专辑ID
	 * @param int $uid	-	用户ID
	 */
	function newAlbumLook($aid, $uid) {
		$gidArr = array();
		$albumTime = D('album')->field('picname,addtime')->where(array('id' => $aid))->find();//查找专辑的图片名和创建时间

		$newAlbumGoodsIds = D('album_goods')->field('gid')->where(array('aid' => $aid))->order('id desc')->select();//根据专辑ID 查找商品ID
		foreach ($newAlbumGoodsIds as $value) {//组装成一维数组
			 $gidArr[] = $value['gid'];
		}

		//查找专辑内的商品
		$count = (count($gidArr) > 9) ? 9 : count($gidArr);//取专辑内的商品不超过9个
		$newAlbumGoods = D('goods')->field('picname, addtime')->where(array(
         	       'id' => $gidArr,
                    //   'uid' => $uid
                ))->limit($count)->select();

		$groundPath = PROJECT_PATH.'public/uploads/albums/'.$uid;//查看的用户的专辑封面路径
		$img = new YuImage($groundPath);
		$groundName = $albumTime['picname'];//背景图片
		// 水印图片，先复制一张空白画布，命名以添加时间加用户ID
		$i = 1;        //初始化水印位置
		$srcPath = './public/uploads/albums/album.png';
		copy($srcPath, $groundPath.'/album.png');
		$img->thumb('album.png', 200, 200, '', '', true, $uid, $albumTime['addtime']);//重新生成画布
		foreach ($newAlbumGoods as $val) {
			$goodsThumb = PROJECT_PATH.'public/uploads/goods/thumb_s/'.date('Y-m-d', $val['addtime']).'/'.$val['picname'];
			if ($i <=9) {
				$img->waterMark($groundName, $goodsThumb, $i, '');
			}
			$i++;
		}
	}

	
	 
	/**
	 * 得到某类别的商品封面
	 * 传入商品类别iD
	 * 反回该商品类别的封面图的路径。
	 */
	 
	function getCateImg($cid) {
		$goods = D('goods');
		$gArr = $goods->where(array('goodscid'=>$cid))->limit(9)->select();		//找出该CID的9张商品图片
		
		$i = 1;        //初始化水印位置
		//    $imgThumb->thumb('album.png', 200, 200, '', $groundPath, '', true, $value['uid'], $value['addtime']);//重新生成画布
		$srcPath = './public/uploads/albums/album.png';
		$groundPath = PROJECT_PATH.'public/uploads/goods_cate/';//查看的用户的专辑封面路径
		copy($srcPath, $groundPath.'/album.png');
		$imgThumb = new Yuimage($groundPath);
		$groundName = $imgThumb->thumb('album.png', 200, 200, '', '', true, '', '', $cid);//重新生成画布
		foreach ($gArr as $val) {
			$goodsThumb = PROJECT_PATH.'public/uploads/goods/thumb_s/'.date('Y-m-d', $val['addtime']).'/'.$val['picname'];
			//for ($i=1; $i<=$ncount; $i++) {//把 9 个生成水印作为专辑封面
			if ($i <=9) {
				$imgThumb->waterMark($groundName, $goodsThumb, $i, '');
			}
			 //}
			 $i++;
		 
		 }
	}
