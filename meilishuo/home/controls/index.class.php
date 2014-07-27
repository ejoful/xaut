<?php
	/**
	 * 首页
	 * Author:吴伟民
	 * 本类主要负责商品分类的专辑和推荐商品的展示。
	 */

	class Index {
		/*
		 * 首页展示
		 */
		function index(){     
			$goodsCate = D('goods_cate');	//商品分类
			$goodsCateList = $goodsCate->where(array('id != ' => 1))->select();		//查找出所有的类别,不包括id为1的（所有）
			$cateList = array();		//$cateList:大分类信息， 如：衣服， 裤子， 鞋子
	
			//遍历大商品分类， 找把他们的子分类放到各个大分类信息的数组下。
			foreach ($goodsCateList as $k => $v) {
				if ($v['assem'] == '0-1') {
					$cateList[$v['id']] = $v; 
				}
			} 
	
			foreach ($goodsCateList as $kk => $vv) {
				if (substr_count($vv['assem'], '-') == 3) {
					$arr = explode('-', $vv['assem']);
					$broPid = $arr[2];		//$broPid  三级子类的爷爷ID,如衬衫的爷爷ID：衣服ID。	
					$cateList[$broPid]['sonList'][] = $vv;
					getCateImg($vv['id']);	//生成三级分类的图片。	
				}
			}
	 
			$this->assign('cateList', $cateList);
			//每日精彩推荐， 单品。
			
			$goods = D('goods');
			//生成商品分页信息。
			$page = new Page($goods->total(), 24);
			
			$page->set("next", "下页");
			$page->set("prev", "上页");
			
			$goodsResults = $goods->order('addtime desc')->limit($page->limit)->select();
			//得到每个商品的分享者头像			
			foreach ($goodsResults as $k => $v) {
				$goodsResults[$k]['face'] = getFace($v['uid']);
			}
			
			$fpage = $page->fpage(4, 5, 6); 
			$this->assign('page', $fpage);
			$this->assign('goodsResults', $goodsResults);
			$this->display();	
		}	
	}
