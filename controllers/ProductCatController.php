<?php
namespace app\controllers;
use app\base\Controller;
use app\daos\ProductCat;
use yii\base\Exception;
/**
 * 商品分类相关的Controller
 * @author xiawei
 */
class ProductCatController extends Controller {
	/**
	 * 商品分类页面
	 */
	public function actionIndex() {
		$enName = \Yii::$app->getRequest()->get('en_name');
		$productCatId = ProductCat::instance()->scalarByColumn('en_name', $enName, 'id');
		if (empty($productCatId)) {
			throw new Exception(404);
		}
		
	}
}