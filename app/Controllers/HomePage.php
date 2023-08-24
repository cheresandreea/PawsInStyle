<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class HomePage extends BaseController
{
    private $productModel;
    private $categoryModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();

    }

    public function index()
    {
        //print_r($this->productModel->getProductByID(100)[0]["product_id"]);

        $search_array=[];
        if (isset($_GET['search_title']) && trim($_GET['search_title']) != '')
        {
            $data['title'] = $_GET['search_title'];
            $search_array['title'] = $_GET['search_title'];
        }
        if(isset($_GET['search_description']) && trim($_GET['search_description']) != '')
        {
            $data['description'] = $_GET['search_description'];
            $search_array['description'] = $_GET['search_description'];
        }

        $data['products'] = $this->productModel->getAllProductsSearch($search_array);

        $data['category'] = $this->categoryModel->getAllCategories();
        //print_r($data['category']);
        //echo view('product', $data);
//        echo "<pre>";
//        print_r($data['category']);
//        die();
        //echo "<pre>";
        for($i = 0; $i < count($data['category']); $i++)
        {
            $data['category'][$i]['numberOfItems'] =  $this->productModel->getNumberOfItemsCategory($data['category'][$i]['category_id']);
        }
        echo view('homepage', $data);
    }

    public function profile($productID)
    {
        $data = [];
        $data['product'] = $this->productModel->getProductByID($productID);

        /////////////////////////////////////////////////////////////////////////////
        $data['category'] = $this->categoryModel->getAllCategories();
        for($i = 0; $i < count($data['category']); $i++)
        {
            $data['category'][$i]['numberOfItems'] =  $this->productModel->getNumberOfItemsCategory($data['category'][$i]['category_id']);
        }
        //////////////////////////////////////////////////////////////////////////
        $data['products'] = $this->productModel->getAllProducts();
        //print_r($data['quantity']);
        echo view('product_profile', $data);
    }

}
