<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210116_133731_blogdetails
 */
class m210116_133731_blogdetails extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blogdetails', [
            'blogid'=> Schema::TYPE_PK,
            'blogtitle' => 'VARCHAR(100)' . ' NOT NULL',
            'blogheader'=> Schema::TYPE_STRING . ' NOT NULL',
            'blogtext' => Schema::TYPE_TEXT . ' NOT NULL',
            'blogauthorname' => Schema::TYPE_STRING . ' NOT NULL',
            'blogauthorlastname' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->addForeignKey(
            'blogtitle_relation',
            'blogdetails',
            'blogtitle',
            'blogtitles',
            'blogtitle',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blogdetails');
        //$this->dropForeignKey('blogtitle_relation','blogdetails');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_133731_blogdetails cannot be reverted.\n";

        return false;
    }
    */
}
