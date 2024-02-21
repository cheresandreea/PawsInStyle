<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';

    protected $allowedFields =
    [
        'title',
        'price',
        'description',
        'rating',
        'photo'
    ];

//   public function getProductByID($productID)
//   {
//       $result = $this->select("*")
//           ->where("product_id", $productID)
//           ->get()->getRowArray();
//
//       return $result;
//   }

   public function getAllProducts()
   {
       return $this->findAll();
       //return $this->select("*")
                    //->get()->getResultArray();
   }

   public function getAllProductsByDescription($description)
   {
       if($description)
       {
           $result = $this->select("*")
               ->like('description', $description, 'both')
               ->get()->getResultArray();
       }
       else $result = $this->getAllProducts();

        return $result;
   }

    public function getAllProductsByTitle($title)
    {
        if($title)
        {
            $result = $this->select("*")
                ->like('title', $title, 'both')
                ->get()->getResultArray();
        }
        else $result = $this->getAllProducts();

        return $result;
    }

    public function getProductsWithAdminName()
    {
        return $this->select('product.*, admin.name as admin_name')
            ->join('admin', 'admin.admin_id = product.admin_id', 'inner')
            ->get()->getResultArray();
    }

    public function getProductByID($productID)
    {
        return $this->select("product.*, admin.name as admin name, category.name as category_name")
                    ->join('admin', 'admin.admin_id = product.admin_id', 'inner')
                    ->join('category', 'product.category_id = category.category_id', 'inner')
                    ->where('product_id', $productID)
                    ->get()->getRowArray();
    }

    public function getNumberOfItemsCategory($categoryID)
    {
        return $this->select ("COUNT(*) as numberOfItems" )
            ->where('category_id', $categoryID)
            ->get()
            ->getRow()
            ->numberOfItems;
    }

    public function getCategoryName($productID)
    {
        return $this->select("category.name as category_name")
            ->join('category', 'product.category_id = category.category_id', 'inner')
            ->where('product_id', $productID)
            ->get()->getRowArray();
    }

    public function getTitleByProductID($productID)
    {
        return $this->select("title")
                    ->where('product_id', $productID)
                    ->get()
                    ->getRow()
                    ->title;
    }

    public function getPriceByProductID($productID)
    {
        return $this->select("price")
            ->where('product_id', $productID)
            ->get()
            ->getRow()
            ->price;
    }

    public function getAllProductsByCategoryAndSearch($searchArray)
    {
        $this->select('*');
        if(isset($searchArray['title']))
        {
            $this->like('title', $searchArray['title'], 'both');
        }

        if(isset($searchArray['category']))
        {
            $this->where('category_id', $searchArray['category']);
        }
        return  $this->get()->getResultArray();
    }

    public function getAllProductsSearch($searchArray)
    {
        $this->select('*');
        if(isset($searchArray['title']))
        {
            $this->like('title', $searchArray['title'], 'both');
        }

        return $this->get()->getResultArray();
    }

    public function getPhotoByProductID($productID)
    {
        return $this->select('photo')
                    ->where("product_id", $productID)
                    ->get()
                    ->getRow()
                    ->photo;
    }

}
