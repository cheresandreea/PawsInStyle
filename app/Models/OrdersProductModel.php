<?php
namespace App\Models;

use CodeIgniter\Model;

class OrdersProductModel extends Model
{
    protected $table = 'order_product';

    protected $allowedFields =
        [
            'product_id',
            'order_id',
            'quantity',
            'size',
        ];

    public function insertCheckout($data)
    {
        $this->insert($data);
    }

}