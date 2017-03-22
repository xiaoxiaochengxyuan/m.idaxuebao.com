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
	public static function setCollegeDormAreaId($collegeDormAreaId) {
		$cookie = new Cookie();
		$cookie->name = 'college_dorm_area_id';
		$cookie->value = $collegeDormAreaId;
		\Yii::$app->getResponse()->getCookies()->add($cookie);
	}
	
	/**
	 * 获取大学Id
	 * @return mixed|string 获取对应的大学Id
	 */
	public static function getCollegeDormAreaId() {
		return \Yii::$app->getRequest()->getCookies()->getValue('college_dorm_area_id');
	}
}