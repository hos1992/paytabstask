<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTables extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'parent_id'          => [
                'type'           => 'INT',
                'constraint'     => 10,
                'default'        => 0
            ],
            "created_at datetime default current_timestamp",


        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('categories');
	}

	//--------------------------------------------------------------------

	public function down()
	{
        $this->forge->dropTable('categories');

    }
}
