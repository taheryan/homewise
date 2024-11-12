<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHouses extends Migration
{
    public function up()
    {
        // Creating 'houses' table
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'default'    => 'rent',
            ],
            'price' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'bedrooms' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'bathrooms' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'size' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
                'null'       => true, // This can be null if size is not provided
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        // Add primary key
        $this->forge->addPrimaryKey('id');

        // Create the table
        $this->forge->createTable('houses');
    }

    public function down()
    {
        $this->forge->dropTable('houses');
    }
}
