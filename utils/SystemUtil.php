<?php
namespace app\utils;
use yii\web\Cookie;

/**
 * 系统相关的工具类
 * @author xiawei
 */
class SystemUtil {
	/**
	 * 设置大学Id
	 * @param int $collegeId
	 */
	public static function setCollegeId($collegeId) {
		$cookie = new Cookie();
		$cookie->name = 'college_id';
		$cookie->value = 1;
		\Yii::$app->getResponse()->getCookies()->add($cookie);
	}
	
	/**
	 * 获取大学Id
	 * @return mixed|string 获取对应的大学Id
	 */
	public static function getCollegeId() {
		return \Yii::$app->getRequest()->getCookies()->getValue('college_id');
	}
}