<?php
namespace app\controllers;
use app\base\Controller;
use app\daos\ProductCat;
use app\daos\CollegeCarousel;
/**
 * 首页Controller
 * @author xiawei
 */
class IndexController extends Controller {
	/**
	 * 首页Action
	 * @return string
	 */
	public function actionIndex() {
		//首先获取所有的顶级商品栏目
		$topProductCats = ProductCat::instance()->listByColumn('pid', 0);
		//获取对应的轮播图
		$collegeCarousels = CollegeCarousel::instance()->getEnableCarousels();
		$this->view->title = '大学宝首页';
		return $this->render('index', [
			'topProductCats' => $topProductCats,
			'collegeCarousels' => $collegeCarousels
		]);
	}
}