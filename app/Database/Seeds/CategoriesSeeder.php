<?php namespace App\Database\Seeds;

class CategoriesSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'parent category A',
                'parent_id' => 0,
            ],
            [
                'name' => 'parent category B',
                'parent_id' => 0,
            ],
            [
                'name' => 'category C sub for A',
                'parent_id' => 1,
            ],
            [
                'name' => 'category D SUB for B',
                'parent_id' => 2
            ],
            [
                'name' => 'category E SUB for B',
                'parent_id' => 2
            ],
            [
                'name' => 'category F sub for C',
                'parent_id' => 3,
            ],
            [
                'name' => 'category G SUB for D',
                'parent_id' => 4
            ],
            [
                'name' => 'category H sub for F',
                'parent_id' => 6,
            ],
            [
                'name' => 'category I SUB for G',
                'parent_id' => 7
            ],

        ];

        foreach ($data as $value){
            // Simple Queries
            $this->db->query("INSERT INTO categories (name, parent_id) VALUES(:name:, :parent_id:)",
                $value
            );
        }

    }
}