<?php
namespace App\Infrastructure\Persistence\Eloquent;

use Illuminate\Database\Eloquent\Model;

class SaleEloquent extends Model {
    protected \ = 'sale';
    public \ = false;
    protected \ = 'string';
    protected \ = ['id', 'seller_id', 'created_at'];
    public \ = false;

    public function items() {
        return \->hasMany(SaleItemEloquent::class, 'sale_id', 'id');
    }
}
