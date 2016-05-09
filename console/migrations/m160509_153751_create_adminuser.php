<?php

use yii\db\Migration;

/**
 * Handles the creation for table `adminuser`.
 */
class m160509_153751_create_adminuser extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%adminuser}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->insert('adminuser', [
            'id' => '3',
            'username' => 'admin',
            'auth_key' => 'd-C0wLYdkAoRhuC1ORbpIbcOt1BMSf-Sn8',
            'password_hash' => '$2y$13$KMuxzLV8yiHgsig.YhlJwe4SjpdsJ3TE.BGgQmDDU0j5WVSzvkab2',
            'password_reset_token' =>  null,
            'email' => 'admin@mail.ru',
            'status' =>  10,
            'created_at' => 1462810603,
            'updated_at' => 1462810603,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('adminuser');
    }
}
