<?php

namespace App\Controllers;


use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\ProductSizeModel;
use App\Models\OrdersModel;
use App\Models\OrdersProductModel;


class HomePage extends BaseController
{
    private $productModel;
    private $categoryModel;
    private $productSizeModel;
    private $ordersModel;
    private $ordersProductModel;


    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->categoryModel = new CategoryModel();
        $this->productSizeModel = new ProductSizeModel();
        $this->ordersModel = new OrdersModel();
        $this->ordersProductModel = new OrdersProductModel();
    }

    public function index()
    {
        $search_array = [];
        if (isset($_GET['search_title']) && trim($_GET['search_title']) != '') {
            $search_array['title'] = $_GET['search_title'];
        }

        if(isset($_GET['category'])) {
            $search_array['category'] = $_GET['category'];
        }

        $data['products'] = $this->productModel->getAllProductsByCategoryAndSearch($search_array);

       // $data['products'] = $this->productModel->getAllProductsSearch($search_array);

        $data['category'] = $this->getCategoriesWithNumberOfItems();

        $data['totalNumber'] = $this->totalNumber($data['category']);

//        echo "<pre>";
//        print_r($data['category']);
//
//        print_r($data['category']);
//        die();
//        echo "<pre>";
        $session = session();
        $data['cart'] = [];


        if ($session->get('cart') !== null) {
            $data['cart'] = $session->get('cart');
        }

        $data['total'] = 0;

        for ($i = 0; $i < count($data['cart']); $i++)
        {
            $data['cart'][$i]['title'] = $this->productModel->getTitleByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['price'] = $this->productModel->getPriceByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['size_name'] = $this->productSizeModel->getSizeNameBySizeID($data['cart'][$i]['size']);
            $data['cart'][$i]['photo'] = $this->productModel->getPhotoByProductID($data['cart'][$i]['productID']);
            $data['total'] = $data['total'] + $data['cart'][$i]['price'] * $data['cart'][$i]['quantity'];
        }

//        echo '<pre>';
//        print_r($data);
//        die();

        echo view('homepage', $data);
    }

    public function profile($productID)
    {
        $data = [];
        $data['product'] = $this->productModel->getProductByID($productID);

        $data['category'] = $this->getCategoriesWithNumberOfItems();

        $data['totalNumber'] = $this->totalNumber($data['category']);

        $data['products'] = $this->productModel->getAllProducts();

        $data['category_type'] = $this->productModel->getCategoryName($productID);

        $data['sizes'] = $this->productSizeModel->getSizesByProductID($productID);

        $data['products_of_certain_category'] = [];

        for ($i = 0; $i < count($data['products']); $i++)
        {
            if ($data['products'][$i]['category_id'] == $data['product']['category_id'] && $data['products'][$i]['product_id'] != $data['product']['product_id'])
                array_push($data['products_of_certain_category'], $data['products'][$i]);
        }

        $session = session();
        $data['cart'] = [];

        if ($session->get('cart') !== null) {
            $data['cart'] = $session->get('cart');
        }

        $data['total'] = 0;

        for ($i = 0; $i < count($data['cart']); $i++)
        {
            $data['cart'][$i]['title'] = $this->productModel->getTitleByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['price'] = $this->productModel->getPriceByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['size_name'] = $this->productSizeModel->getSizeNameBySizeID($data['cart'][$i]['size']);
            $data['cart'][$i]['photo'] = $this->productModel->getPhotoByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['max_quantity'] = $this->productSizeModel->getMaxQuantityByProductIDSize($data['cart'][$i]['productID'], $data['cart'][$i]['size']);
            $data['total'] = $data['total'] + $data['cart'][$i]['price'] * $data['cart'][$i]['quantity'];
        }

//        for ($i = 0; $i < count($data['product']); $i++)
//        {
//            $data['product'][$i]['max_quantity'] = $this->productSizeModel->getMaxQuantityByProductIDSize($data['product'][$i]['productID'], $data['product'][$i]['size']);
//        }

        //$data['quantity'] = $this->productSizeModel->getQantityByID($productID); - nu stiu cum sa trimit numarul de articole din size ul respectiv

//        print_r($data['sizes']);
//        foreach ($data['size'] as $size)
//            print_r($size['size']);
//        die();
//        echo "<pre>";
//        print_r($data);
//        die();
        echo view('product_profile', $data);
    }

    public function getCategoriesWithNumberOfItems()
    {
        $categories = $this->categoryModel->getAllCategories();
        foreach ($categories as &$category) {
            $category['numberOfItems'] = $this->productModel->getNumberOfItemsCategory($category['category_id']);
        }

        return $categories;
    }

    public function addCart()
    {
        $session = session();
        //$session->destroy();
        // Check if a cart already exists in the session
        if ($session->get('cart') === null)
        {
            $cart = [];
        }
        else {
            $cart = $session->get('cart');
        }
        //Add the selected product to the cart
        $productID = $_POST["product_id"];
        $quantity = $_POST["quantity"];
        $size = $_POST["attribute_pa_size"];

        if ($size == "")
            $session->setFlashdata('warning', "GOL");

        $errors = "";

        if (trim($productID) == "")
            $errors .= "Not a valid product";

        if (trim($quantity) == "")
            $errors .= "Not a valid quantity";

        if ($size == '')
            $errors .= "Not a valid size";

        if ((!(is_numeric($quantity))) || $quantity < 1)
            $errors .= "Not a numeric value for quantity";

        $numberOfItems = $this->productSizeModel->getNumberOfItemsByProductIDSize($productID, $size);

        if($numberOfItems == null)
        {
            $errors .= "Item not found";
        }
        else if ($numberOfItems['quantity'] < $quantity)
        {
            $errors .= "Not enough items";
        }

        if ($errors == "")
        //Check if the product is already in the cart, and update the quantity
        {
            $exists = 0;
            echo "<pre>";
            print_r($cart);
            foreach ($cart as &$item)
                if ($exists == 0) {
                    if ($item['productID'] === $productID && $item['size'] === $size) {
                        $item['quantity'] += $quantity;
                        $exists = 1;
                    }
                }
            //if the product is not already in the cart, add it as new
            if ($exists == 0) {
                $new_item = [
                    'productID' => $productID,
                    'quantity' => $quantity,
                    'size' => $size, //sizeID
                ];
                $cart[] = $new_item;
            }
            $session->set('cart', $cart);
        }
        else {
                print_r($errors);
        }
        return redirect()->to("homepage/profile/" . $productID);


    }

    public function cart()
    {
        //check if the cart exists
        $session = session();
        $data['cart'] = [];
        $data['warning'] = [];

        if ($session->get('cart') !== null) {
            $data['cart'] = $session->get('cart');
        }
        if($session->get('warning'))
        {
            $data['warning'] = $session->get('warning');
        }
        $data['total'] = 0;

        for ($i = 0; $i < count($data['cart']); $i++)
        {
            $data['cart'][$i]['title'] = $this->productModel->getTitleByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['price'] = $this->productModel->getPriceByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['size_name'] = $this->productSizeModel->getSizeNameBySizeID($data['cart'][$i]['size']);
            $data['cart'][$i]['photo'] = $this->productModel->getPhotoByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['max_quantity'] = $this->productSizeModel->getMaxQuantityByProductIDSize($data['cart'][$i]['productID'], $data['cart'][$i]['size']);
            $data['total'] = $data['total'] + $data['cart'][$i]['price'] * $data['cart'][$i]['quantity'];
        }

       // echo "<pre>";
//
//        print_r($data);
//
//        print_r($session->get('cart'));
//        die();

       //$data['product'] = $this->productSizeModel

//        print_r($data);
//        die();
//       print_r($data['cart']['0']['quantity']);
        echo view('cart', $data);
    }

    public function totalNumber($allCategories)
    {
        $total = 0;
        foreach ($allCategories as $category)
        {
            $total += $category['numberOfItems'];
        }

        return $total;
    }

    public function checkout()
    {
        $session = session();
        $data['cart'] = [];


        if ($session->get('cart') !== null) {
            $data['cart'] = $session->get('cart');
        }

        $data['total'] = 0;

        for ($i = 0; $i < count($data['cart']); $i++)
        {
            $data['cart'][$i]['title'] = $this->productModel->getTitleByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['price'] = $this->productModel->getPriceByProductID($data['cart'][$i]['productID']);
            $data['cart'][$i]['size_name'] = $this->productSizeModel->getSizeNameBySizeID($data['cart'][$i]['size']);
            $data['cart'][$i]['photo'] = $this->productModel->getPhotoByProductID($data['cart'][$i]['productID']);
            $data['total'] = $data['total'] + $data['cart'][$i]['price'] * $data['cart'][$i]['quantity'];
        }
        echo view('checkout', $data);
    }

    public function addOrdercheckout()
    {
        //if ($_POST['payment_method'] == 'cash' ? 0 : 1);


        $data = array(
            'name' => $_POST['name'],
            'country' => $_POST['country'],
            'address' => $_POST['address'],
            'city' => $_POST['city'],
            'postal_code' => $_POST['postcode'],
            'phone_number' => $_POST['phone'],
            'email' => $_POST['email'],
            'additional_information' => $_POST['order_comments'],
            'payment_method' => $_POST['payment_method'],
        );
        $orderID = $this->ordersModel->insertCheckout($data);

        $session = session();
        $data['cart'] = [];

        print_r($orderID);

        if ($session->get('cart') !== null) {
            $data['cart'] = $session->get('cart');
        }

        for ($i = 0; $i < count($data['cart']); $i++)
        {
            $data2 = array(
                'product_id' => $data['cart'][$i]['productID'],
                'order_id' => $orderID,
                'quantity' => $data['cart'][$i]['quantity'],
                'size' => $data['cart'][$i]['size'],

            );
            $this->ordersProductModel->insertCheckout($data2);
        }
        echo '<pre>';
        print_r($data['cart']);

    }
}
