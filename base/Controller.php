<?php
namespace app\base;

use app\utils\SystemUtil;

/**
 * 所有Controller的基类
 * @author xiawei
 */
abstract class Controller extends \yii\web\Controller {
	/**
	 * {@inheritDoc}
	 * @see \yii\web\Controller::beforeAction()
	 */
	public function beforeAction($action) {
		//这个代码之后要被删除的
		if (!\Yii::$app->request->getCookies()->has('college_dorm_area_id')) {
			SystemUtil::setCollegeDormAreaId(1);
		}
		return parent::beforeAction($action);
	}
	/**
	 * {@inheritDoc}
	 * @see \yii\base\Controller::render()
	 */
	public function render($view, $params = []) {
		$this->defineStatic();
		return parent::render($view, $params);
	}
	
	/**
	 * {@inheritDoc}
	 * @see \yii\base\Controller::renderPartial()
	 */
	public function renderPartial($view, $params= []) {
		$this->defineStatic();
		return parent::renderPartial($view, $params);
	}
	
	/**
	 * 定义一些路径常量
	 */
	private function defineStatic() {
		//定义静态文件路径
		defined('STATIC_URL') or define('STATIC_URL', \Yii::$app->getUrlManager()->getBaseUrl().'/static');
		
		//定义自定义静态路径
		defined('STATIC_CSS_URL') or define('STATIC_CSS_URL', STATIC_URL.'/css');
		defined('STATIC_IMGS_URL') or define('STATIC_IMGS_URL', STATIC_URL.'/imgs');
		defined('STATIC_JS_URL') or define('STATIC_JS_URL', STATIC_URL.'/js');
		
		//定义bootstrap路径
		defined('STATIC_BOOTSTRAP_URL') or define('STATIC_BOOTSTRAP_URL', STATIC_URL.'/bootstrap');
		defined('STATIC_BOOTSTRAP_CSS_URL') or define('STATIC_BOOTSTRAP_CSS_URL', STATIC_BOOTSTRAP_URL.'/css');
		defined('STATIC_BOOTSTRAP_JS_URL') or define('STATIC_BOOTSTRAP_JS_URL', STATIC_BOOTSTRAP_URL.'/js');
	}
}