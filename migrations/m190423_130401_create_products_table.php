<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%products}}`.
 */
class m190423_130401_create_products_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%products}}', [
            'id' => Schema::TYPE_PK,
            'category_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT,
            'price' => Schema::TYPE_FLOAT. ' NOT NULL' . ' DEFAULT \'0\'',
            'keywords' => Schema::TYPE_STRING. ' DEFAULT NULL',
            'description' => Schema::TYPE_STRING. ' DEFAULT NULL',
            'img' => Schema::TYPE_STRING. ' DEFAULT \'no-image.png\'',
            'hit' => Schema::TYPE_INTEGER. ' NOT NULL' . ' DEFAULT \'0\'' ,
            'new' => Schema::TYPE_INTEGER. ' NOT NULL' . ' DEFAULT \'0\'',
            'sale' => Schema::TYPE_INTEGER. ' NOT NULL' . ' DEFAULT \'0\'',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%products}}');
//        return FALSE;
    }
}
