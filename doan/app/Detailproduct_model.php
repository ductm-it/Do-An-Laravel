<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Detailproduct_model extends Model
{
    protected $table = 'shoes';
    public function detail_product($where = null){
        return DB::table('shoes')->where($where)->get();
    }
}
