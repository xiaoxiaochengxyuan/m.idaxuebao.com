<?php
namespace app\utils;

/**
 * 阿里云Oss对应的工具类
 * @author xiawei
 */
class OssUtil {
	/**
	 * 获取Oss图片路径
	 * @param unknown $fileName
	 * @return string
	 */
	public static function getOssImg($fileName) {
		return \Yii::$app->params['oss']['oss_base_url'].'/'.$fileName;
	}
}