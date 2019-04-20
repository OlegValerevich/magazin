<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\db\ActiveRecord;


/**
 * Description of Product
 */
class Product extends ActiveRecord{
    
    public static function tableName() {
        return 'product';
    }
    
    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    
}
