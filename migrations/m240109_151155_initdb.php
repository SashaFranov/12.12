<?php

use yii\db\Migration;

/**
 * Class m240109_151155_initdb
 */
class m240109_151155_initdb extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('users',[
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->unique()->notNull(),
            'password' => $this->string(120)->notNull(),
            'is_admin' => $this->boolean()->defaultValue(false)
        ]);
        $this->insert('users',[
            'email' => 'admin@admin.admin',
            'password' => password_hash('admin',PASSWORD_DEFAULT),
            'is_admin' => true
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('users');
        echo 'Удаление табличка';
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240109_151155_initdb cannot be reverted.\n";

        return false;
    }
    */
}
