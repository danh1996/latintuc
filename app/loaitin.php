<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    //
    protected $table="loaitin";
    //chi lay ra cac truong can thiet trong bang loai tin cho no nhe
    protected $fillable=['id','tenlt','tenltkd','anhien','idtl'];
    public $timestamps=true;
    public function theloai(){
        return $this->belongsTo('App/theloai');
    }
    public function tintuc(){
        return $this->hasMany('App/tintuc');
    }

}
