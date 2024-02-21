<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductSizeModel extends Model
{
    protected $table = 'product_size';

    protected $allowedFields =
    [
        'productToSize_id',
        'product_id',
        'size_id'
    ];

    public function getSizesByProductID($productID)
    {
        return $this->select('*')
            ->join('sizes', 'sizes.size_id = product_size.size_id')
            ->join('product', 'product.product_id = product_size.product_id')
            ->where('product.product_id', $productID)
            ->get()
            ->getResultArray();
    }

    public function getNumberOfItemsByProductIDSize($productID, $sizeID)
    {
        return $this->select("quantity")
                ->where('product_id', $productID)
                ->where('size_id', $sizeID)
                ->get()
                ->getRowArray();
    }

    public function getSizeNameBySizeID($sizeID)
    {
        return $this->select("sizes.size")
                    ->join('sizes', "sizes.size_id = $sizeID")
                    ->get()
                    ->getRow()
                    ->size;

    }


    ////aceeasi functie ca getNumberOfItemsByProductIDSize, dar pe aia am folosit o la erori
    public function getMaxQuantityByProductIDSize($productID, $sizeID)
    {
        return $this->select("quantity")
                ->where('product_id', $productID)
                ->where('size_id', $sizeID)
                ->get()
                ->getRow()
                ->quantity;
    }

}
