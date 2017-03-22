<?php
namespace app\controllers;
use app\base\Controller;
use app\daos\Product;
use yii\helpers\Json;
use app\daos\CollegeDormAreaProduct;
/**
 * 商品相关的Controller
 * @author xiawei
 */
class ProductController extends Controller {
	/**
	 * 商品预览Action
	 */
	public function actionPreview() {
		$id = \Yii::$app->getRequest()->get('id');
		$product = Product::instance()->get($id);
		$product['list_imgs'] = Json::decode($product['list_imgs']);
		$product['parameters'] = Json::decode($product['parameters']);
		$product['options'] = Json::decode($product['options']);
	}
	
	/**
	 * 商品详情页面
	 */
	public function actionDetail() {
		$id = \Yii::$app->getRequest()->get('id');
		//首先获取商品的相关信息
		$collegeDormAreaProduct = CollegeDormAreaProduct::instance()->detail($id);
		$this->getView()->title = $collegeDormAreaProduct['name'];
		return $this->render('detail', [
			'collegeDormAreaProduct' => $collegeDormAreaProduct
		]);
	}
}