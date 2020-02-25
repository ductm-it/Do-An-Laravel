<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Feedback_model extends Model
{
    //
    protected $table = 'feedback';
    public $fillable = ['product_id','name','content'];
    public function getcomment($where = null){
        return DB::table('feedback')->where($where)->get();
    }
}
