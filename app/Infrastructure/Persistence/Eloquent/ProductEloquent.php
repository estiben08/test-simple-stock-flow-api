<?php
namespace App\Infrastructure\Persistence\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductEloquent extends Model {
    use SoftDeletes;
    protected \ = 'product';
    public \ = false;
    protected \ = 'string';
    protected \ = ['id', 'name', 'price', 'stock', 'category_id', 'image_url', 'version'];
    public \ = false;
}
