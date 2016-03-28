<?php

/**
 * This is the model class for table "order".
 *
 * The followings are the available columns in table 'order':
 * @property integer $id
 * @property string $pay_type
 * @property string $delivery_type
 * @property string $name
 * @property string $tel
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pay_type, delivery_type, name, tel', 'required'),
			array('pay_type, delivery_type', 'length', 'max'=>15),
			array('name, tel', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pay_type, delivery_type, name, tel', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'products'=>array(self::MANY_MANY, 'Product', 'product_order(order_id, product_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'pay_type' => 'Способ оплаты',
			'delivery_type' => 'Способ доставки',
			'name' => 'Имя',
			'tel' => 'Номер',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('pay_type',$this->pay_type,true);
		$criteria->compare('delivery_type',$this->delivery_type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('tel',$this->tel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    protected function afterSave()
    {
        parent::afterSave();

        $products = Yii::app()->shoppingCart->getPositions();

        foreach($products as $product)
        {
            $productOrder = new ProductOrder();

            $productOrder->order_id = $this->id;
            $productOrder->product_id = $product->id;

            $productOrder->save();
        }

        Yii::app()->shoppingCart->clear();
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
