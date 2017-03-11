<?php
namespace app\utils;
/**
 * 封装了一些公用方法的工具类
 * @author xiawei
 */
class CommonUtil {
	/**
	 * 格式化输出内容
	 * @param mixed $data 要输出的内容
	 */
	public static function formatPrint($data) {
		echo '<pre>';
		print_r($data);
		die('</pre>');
	}
}