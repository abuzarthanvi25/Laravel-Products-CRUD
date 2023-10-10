<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public const PRODUCT_GET_SUCCESS = 'Products Get Successfully';
    public const PRODUCT_GET_BY_ID_SUCCESS = 'Product Get Successfully';
    public const PRODUCT_ADD_SUCCESS = 'Product Added Successfully';
    public const PRODUCT_UPDATE_SUCCESS = 'Product Updated Successfully';
    public const PRODUCT_DELETE_SUCCESS = 'Product Deleted Successfully';
    public const PRODUCT_NOT_FOUND = 'Product Not Found';
}
