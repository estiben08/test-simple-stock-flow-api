<?php
namespace App\Infrastructure\Persistence\Eloquent;

use Illuminate\Database\Eloquent\Model;

class SaleItemEloquent extends Model {
    protected \ = 'sale_item';
    public \ = false;
    protected \ = 'string';
    protected \ = ['id', 'sale_id', 'product_id', 'product_name', 'category_name', 'quantity', 'unit_price'];
    public \ = false;
}
