<?php
	class YuImage extends Image {
		function thumb($name, $width, $height, $qz="th_", $size = array(), $israndom = false, $uid = '', $time = '', $cid = ''){
			$imgInfo=$this->getInfo($name);                                 //获取图片信息
			$srcImg=$this->getImg($name, $imgInfo);                          //获取图片资源   
	  		if (empty($size)) {		
				$size=$this->getNewSize($name,$width, $height,$imgInfo);       //获取新图片尺寸
			} else {
				if ($imgInfo['width'] > $imgInfo['height']) {
					$imgInfo['width'] = $width * $imgInfo['height'] / $height;
				} else {
					$imgInfo['height'] = $height * $imgInfo['width'] / $width;
				}
			}
			$newImg=$this->kidOfImage($srcImg, $size,$imgInfo);   //获取新的图片资源
			if ($israndom) {
				$time = empty($time) ? time() : $time;
				if (!empty($cid)) {
					$myNewName = $cid.strrchr($name, '.');
				} else {
					$myNewName = date('YmdHis', $time).'_'.$uid.strrchr($name, '.');
				}
			} else {
				$myNewName = $name;
			}
			return $this->createNewImage($newImg, $qz.$myNewName,$imgInfo);    //返回新生成的缩略图的名称，以"th_"为前缀
		}

		protected function kidOfImage($srcImg,$size, $imgInfo){
			$newImg = imagecreatetruecolor($size["width"], $size["height"]);		
			$otsc = imagecolortransparent($srcImg); //将某个颜色定义为透明色
			if( $otsc >= 0 && $otsc < imagecolorstotal($srcImg)) {  //取得一幅图像的调色板中颜色的数目
		  		 $transparentcolor = imagecolorsforindex( $srcImg, $otsc ); //取得某索引的颜色
		 		 $newtransparentcolor = imagecolorallocate(
			   		 $newImg,
			  		 $transparentcolor['red'],
			   	         $transparentcolor['green'],
			   		 $transparentcolor['blue']
		  		 );

		  		 imagefill( $newImg, 0, 0, $newtransparentcolor );
		  		 imagecolortransparent( $newImg, $newtransparentcolor );
			}
			
			imagecopyresized( $newImg, $srcImg, 0, 0, 0, 0, $size["width"], $size["height"], $imgInfo["width"], $imgInfo["height"] );
			imagedestroy($srcImg);
			return $newImg;
		}
	}
