<?php

/**
 * Description of cate
 * 这是分类控制器，  主要根据宝贝的分类ID ， 展示相关分类的宝贝
 * @author lamp
 */
class Cate {

        function index() {
                debug(1);
                if (isset($_GET['cid'])) {      //如果浏览分类宝贝信息时， 有CID传值， 才展示
                        $cid = $_GET['cid'];       
                        $this->assign('cid', $cid);
                        $goods = D('goods');
                        $goods_cate = D('goods_cate');
			$catename = $goods_cate->field('catename')->where(array('id' => $cid))->find();
                        $this->assign('pcate_info', $catename);
                        //这里是找当前CID的所有商品
                        $goodsResults = $goods -> where(array('goodscid' => $cid))
                                               -> order('addtime desc')                                                  
                                               -> select();
                     
                        //这里是找当前GET[CID]的子级别的所有商品
                        if ($goods_cate->field('id')->where(array('pid'=>$cid))->select()) {
                                $sonid = $goods_cate->field('id')->where(array('pid'=>$cid))->select();
                                foreach($sonid as $v) {
                                       $sonGoodsResults = $goods -> where(array('goodscid' => $v['id']))
                                                          -> order('addtime desc')
                                                          -> limit(10)     
                                                          -> select();
                                       $goodsResults = array_merge($goodsResults, $sonGoodsResults);
                                       //再遍历一次， 孙子级别的所有商品
                                       if ($goods_cate->field('id')->where(array('pid'=>$v['id']))->select()) {
                                                $ssonid = $goods_cate->field('id')->where(array('pid'=>$v['id']))->select();
                                                foreach($ssonid as $v) {
                                                       $sonGoodsResults = $goods -> where(array('goodscid' => $v['id']))
                                                                          -> order('addtime desc')
                                                                          -> limit(10)     
                                                                          -> select();
                                                       $goodsResults = array_merge($goodsResults, $sonGoodsResults);
                                                }
                                        }
                                }
                        }
               
                        $goods_comments = D('goods_comments');
                     
                        for ($i = 0; $i < count($goodsResults); $i++) {
                                $face = getface($goodsResults[$i]['uid']);
                                $goodsResults[$i]['face'] = $face;        //绑定每条宝贝的发表用户的头像
                                if ($goodsResults[$i]['comments'] > 0) {        //如果该条宝贝有评论
                                        $comments_list = $goods_comments->field('fromuid,username,content')
                                                ->where(array(
                                            'gid' => $goodsResults[$i]['id']
                                        ))->order('addtime desc')->limit('2')->select();  
                                        foreach($comments_list as $k => $v) {
                                                $comments_list[$k]['face'] = getface($v['fromuid']);
                                        }
                                        $goodsResults[$i]['comments_list'] = $comments_list;    //商品的两条评论
                                }
                              
                        } 
						$total = count($goodsResults);
                        $page = new Page($total, 30, 'cid/'.$cid);          //实例化分页类，每页30条
                        $this->assign('fpage', $page->fpage(4,5,6));      
				 
                        $this->assign('goodsResults', $goodsResults);   //把GET['cid']相关的商品分配给模版
                        
                        /*-------该分类相关子分类导航-----------*/
                        $goods_cate = D('goods_cate');
                        $assem = $goods_cate->field('assem')->where(array('id'=>$cid))->find();
                         
                        $assem_path_arr = explode('-',$assem['assem']);
                        if (count($assem_path_arr) >= 3) {          //如果assem的分类级别超过3个， 如0-1-2-10
                                $cid = $assem_path_arr['2'];
                        }
                  
                        $cate_info= $goods_cate->where(array('id' => $cid))->select();
                        $this->assign('cate_info', $cate_info);
                        
                        $cate_list = $goods_cate->field('id, catename')->where(array('pid' => $cid))->select();     
                        foreach($cate_list as $k => $v) {
                                $cate_list[$k]['items'] = $goods_cate->where(array('pid' => $v['id']))->select();
                        }
                        
                        $this->assign('cate_list', $cate_list);
                        /*---------------------------------*/
                        $this->display();
                }else {
                        $this->redirect('index/index');
                }
                
        }

}

?>
