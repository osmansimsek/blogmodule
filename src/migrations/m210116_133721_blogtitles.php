<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210116_133721_blogtitles
 */
class m210116_133721_blogtitles extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('blogtitles',[
            'blogtitle' => 'VARCHAR(100)' . ' NOT NULL',
        ]);
        
        $this->addPrimaryKey('blogtitle_primarykey','blogtitles','blogtitle');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('blogtitles');
        //$this->dropPrimaryKey('blogtitle_primarykey','blogtitles');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_133721_blogtitles cannot be reverted.\n";

        return false;
    }
    */
}
