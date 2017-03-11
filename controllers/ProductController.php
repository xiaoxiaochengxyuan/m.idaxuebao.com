<?php
namespace app\controllers;
use app\base\Controller;
use app\daos\Product;
use yii\helpers\Json;
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
}