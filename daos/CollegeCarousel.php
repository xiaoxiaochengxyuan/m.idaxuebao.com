<?php
namespace app\daos;
use app\base\Dao;
/**
 * 大学轮播图Dao
 * @author xiawei
 */
class CollegeCarousel extends Dao {
	/**
	 * 表名
	 * @var string
	 */
	const TABLE_NAME = 'college_carousel';
	
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
	 * @return CollegeCarousel
	 */
	public static function instance($className = __CLASS__) {
		return parent::instance($className);
	}
	
	/**
	 * 获取可用的轮播图
	 */
	public function getEnableCarousels() {
		return $this->createQuery()
			->select(['image_url', 'url', 'id'])
			->from($this->tableName())
			->where('college_id=:college_id and enabled=:enabled', [':college_id' => $this->getCollegeId(), ':enabled' => 1])
			->orderBy(['sort' => SORT_ASC])
			->all(self::db());
	}
}