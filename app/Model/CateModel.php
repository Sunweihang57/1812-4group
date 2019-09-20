<?php

namespace App\Model;

use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
        use ModelTree;
        protected $primaryKey='cate_id';
		protected $table = 'goods_cate';
		public $timestamps = false;

}
