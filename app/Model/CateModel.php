<?php

namespace App\Model;

use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class CateModel extends Model
{
        use ModelTree;
		protected $table = 'cate';
		public $timestamps = false;

}
