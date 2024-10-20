<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i < 100; $i++){
        $data = [
            
                'nama'       => $faker->name,
                'alamat'     => $faker->address,
                'created_at' => $faker->date('Y-m-d H:i:s'),
                'updated_at' => Time::now()
        ];
                $this->db->table('people')->insert($data);
        };

        // Simple Queries
        // $this->db->query(
            // "INSERT INTO orang (nama, alamat, created_at) VALUES(:nama:, :alamat:, :created_at:)",
        //  $data);

        // Using Query Builder
        
    }
}