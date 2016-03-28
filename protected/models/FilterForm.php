<?php

class FilterForm extends CFormModel
{
    public $brand;
    public $screen;
    public $cpu;
    public $ram;
    public $os;
    public $min_price;
    public $max_price;

    public function rules()
    {
        return array(
            // rememberMe needs to be a boolean
            array('min_price, max_price', 'numerical', 'integerOnly'=>true),
            array('brand, screen, cpu, ram, os', 'safe'),
        );
    }

    public function getCDbCriteria()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('brand', $this->brand);
        $criteria->compare('screen_diagonal', $this->screen);
        $criteria->compare('cpu_type', $this->cpu);
        $criteria->compare('ram', $this->ram);
        $criteria->compare('os_type', $this->os);
        $criteria->compare('price', '>='.$this->min_price);
        $criteria->compare('price', '<='.$this->max_price);

        return $criteria;
    }

}