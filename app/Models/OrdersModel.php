<?php
namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';

    protected $allowedFields =
        [
            'name',
            'country',
            'address',
            'city',
            'postal_code',
            'phone_number',
            'email',
            'additional_information',
            'payment_method'
        ];

    public function insertCheckout($data)
    {
        $this->insert($data);
        return $this->db->insertID();
    }


}