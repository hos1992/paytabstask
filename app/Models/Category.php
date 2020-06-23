<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function getAllParentCategories(){
        return $this->where(['parent_id' => 0])->findAll();
    }

    public function getSubCategories($parent_id){
        return $this->where(['parent_id' => $parent_id])->findAll();
    }

}