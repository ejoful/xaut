<?php
	class Album extends User {
		/**
		 * 创建专辑
		 * @param array $arr	-	专辑信息
		 * @return bool		-	是否创建成功
		 */
		function add($uid, $arr) {
			$albumDir = PROJECT_PATH."public/uploads/albums/";
			$dstDir   = $albumDir.$uid;      //专辑封面存放目录
			//判断是否存在存放专辑封面的目录，如果不存在则根据用户 ID 新建一个目录
			if ((file_exists($dstDir) ? true : mkdir($dstDir, 0777, true))) {
				$img    = new YuImage($dstDir);
				$bgName = 'album.png';
				$width  = 200;
				$height = 200;
				copy($albumDir.$bgName, $dstDir.'/'.$bgName);
				$arr['picname'] = $img->thumb($bgName, $width, $height, '', '', true, $uid);
				$action = D('album')->insert($arr);
				return ($arr['picname'] && $action) ? $action : false;
			} else {
				return false;
			}
		}
	}
