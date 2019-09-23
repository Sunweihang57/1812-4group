<?php

namespace App\Model;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class BrandModel extends Model
{
    use ModelTree;
    protected $table = 'goods_brand';
    protected $primaryKey = 'b_id';
}
