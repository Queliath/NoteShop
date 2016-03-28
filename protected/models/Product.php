<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property integer $price
 * @property string $image_source
 * @property string $brand
 * @property string $model
 * @property string $screen_diagonal
 * @property string $screen_desc
 * @property string $cpu
 * @property string $cpu_type
 * @property integer $ram
 * @property integer $hdd
 * @property string $video_card
 * @property string $os
 * @property string $os_type
 * @property string $additional_desc
 */
class Product extends CActiveRecord implements IECartPosition
{
    public function getId()
    {
        return $this->id;
    }

    public function getPrice()
    {
        return $this->price;
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('price, image_source, brand, model, screen_diagonal, screen_desc, cpu, cpu_type, ram, hdd, video_card, os, os_type, additional_desc', 'required'),
			array('price, ram, hdd', 'numerical', 'integerOnly'=>true),
			array('image_source, additional_desc', 'length', 'max'=>100),
			array('brand, os', 'length', 'max'=>30),
			array('model, screen_desc, video_card', 'length', 'max'=>40),
			array('screen_diagonal', 'length', 'max'=>5),
			array('cpu', 'length', 'max'=>50),
			array('cpu_type, os_type', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, price, image_source, brand, model, screen_diagonal, screen_desc, cpu, cpu_type, ram, hdd, video_card, os, os_type, additional_desc', 'safe', 'on'=>'search'),
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
            'orders'=>array(self::MANY_MANY, 'Order', 'product_order(product_id, order_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'price' => 'Цена',
			'image_source' => 'Путь к картинке',
			'brand' => 'Бренд',
			'model' => 'Модель',
			'screen_diagonal' => 'Диагональ экрана',
			'screen_desc' => 'Характеристики экрана',
			'cpu' => 'Процессор',
			'cpu_type' => 'Тип процессора',
			'ram' => 'Оперативная память',
			'hdd' => 'Жесткий диск',
			'video_card' => 'Видеокарта',
			'os' => 'Операционная система',
			'os_type' => 'Тип ОС',
			'additional_desc' => 'Дополнительное описание',
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
		$criteria->compare('price',$this->price);
		$criteria->compare('image_source',$this->image_source,true);
		$criteria->compare('brand',$this->brand,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('screen_diagonal',$this->screen_diagonal,true);
		$criteria->compare('screen_desc',$this->screen_desc,true);
		$criteria->compare('cpu',$this->cpu,true);
		$criteria->compare('cpu_type',$this->cpu_type,true);
		$criteria->compare('ram',$this->ram);
		$criteria->compare('hdd',$this->hdd);
		$criteria->compare('video_card',$this->video_card,true);
		$criteria->compare('os',$this->os,true);
		$criteria->compare('os_type',$this->os_type,true);
		$criteria->compare('additional_desc',$this->additional_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
