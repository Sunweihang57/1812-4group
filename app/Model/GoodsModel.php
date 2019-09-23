<?php

namespace App\Model;

use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Cate extends Model{

}

class GoodsModel extends Model
{
    use ModelTree;
    protected $primaryKey='goods_id';
    protected $table = 'goods';
    public $timestamps = false;
    public function cate()
    {
        return $this->belongsTo(Cate::class, 'cate_id');

    }

    public function brand()
    {
        return $this->hasMany(Brand::class);
    }
}

class Brand extends Model
{

}
