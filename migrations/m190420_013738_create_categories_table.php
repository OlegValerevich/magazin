<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%categories}}`.
 */
class m190420_013738_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('{{%categories}}', [
            'id' => $this->primaryKey()->unique()->notNull(),
            'parent_id' => $this->integer(11)->notNull()->defaultValue(0),
            'name' => $this->string(255)->notNull(),
            'keywords' => $this->string(255)->null()->defaultValue(NULL),
            'description' => $this->string(255)->null()->defaultValue(NULL),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
//        $this->dropTable('{{%categories}}');
        return false;
    }
}
