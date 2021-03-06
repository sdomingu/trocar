<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Adduserprofile extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('user_profile', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'first_name' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'last_name' => 
             array(
              'type' => 'string',
              'length' => 150,
             ),
             'address' => 
             array(
              'type' => 'string',
              'length' => 100,
             ),
             'token' => 
             array(
              'type' => 'string',
              'length' => 32,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('user_profile');
    }
}