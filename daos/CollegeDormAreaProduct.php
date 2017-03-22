<?php
namespace app\daos;
use app\base\Dao;
use yii\helpers\Json;
/**
 * 大学区域商品对应的Dao
 * @author xiawei
 */
class CollegeDormAreaProduct extends Dao {
	/**
	 * 表名
	 * @var string
	 */
	const TABLE_NAME = 'college_dorm_area_product';
	
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
	 * @return CollegeDormAreaProduct
	 */
	public static function instance($className = __CLASS__) {
		return parent::instance($className);
	}
	
	/**
	 * 获取首页精品信息
	 */
	public function indexJinpinData() {
		$currentDormAreaId = $this->getCollegeDormAreaId();
		return $this->createQuery()
			->select(['p.name', 'cdap.id', 'p.title_img', 'p.price'])
			->from($this->tableName().' cdap')
			->leftJoin(Product::TABLE_NAME.' p', 'p.id=cdap.product_id')
			->where("cdap.college_dorm_area_id={$currentDormAreaId} and cdap.is_jinpin=1")
			->offset(0)
			->limit(6)
			->orderBy(['cdap.update_time' => SORT_DESC])
			->all(self::db());
	}
	
	/**
	 * 获取商品详情
	 * @param int $id
	 * @return array
	 */
	public function detail($id) {
		$select = [
			'cdap.id',
			'p.name',
			'p.list_imgs'
		];
		$collegeDormAreaProduct = $this->createQuery()
			->select($select)
			->from($this->tableName().' cdap')
			->leftJoin(Product::TABLE_NAME.' p', 'cdap.product_id=p.id')
			->where("cdap.id='{$id}'")
			->one(self::db());
		$collegeDormAreaProduct['list_imgs'] = Json::decode($collegeDormAreaProduct['list_imgs']);
		return $collegeDormAreaProduct;
	}
}