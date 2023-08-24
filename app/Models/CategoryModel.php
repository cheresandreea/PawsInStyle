<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';

    protected $allowedFields =
        [
            'name'
        ];

    public function getAllCategories()
    {
        return $this->select("name, category_id")
                ->get()->getResultArray();
    }

}
