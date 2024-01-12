<?php

use yii\db\Migration;

/**
 * Class m240109_151228_request
 */
class m240109_151228_request extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('request', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'timestamp' => $this->timestamp()->defaultExpression('NOW()')->notNull(),
            'user_id' => $this->integer()->notNull()
        ]);
        $this->addForeignKey(
            'user_to_request_fk',
            'request',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'

        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('request');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240109_151228_request cannot be reverted.\n";

        return false;
    }
    */
}
