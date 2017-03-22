<?php
namespace app\daos;
use app\base\Dao;
/**
 * 对应的大学Dao
 * @author xiawei
 */
class College extends Dao {
	/**
	 * 表名
	 * @var string
	 */
	const TABLE_NAME = 'college';
	
	/**
	 * {@inheritDoc}
	 * @see \app\base\Dao::tableName()
	 */
	protected function tableName() {
		return self::TABLE_NAME;
	}
	
	/**
	 * 单例
	 * @param system $className
	 * @return College
	 */
	public static function instance($className = __CLASS__) {
		return parent::instance($className);
	}
}