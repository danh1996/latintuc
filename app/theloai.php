<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class theloai extends Model
{
    //
    protected $table="theloai";
    protected $fillable=['id','tentl','tentlkd','anhien'];
    public $timestamps=true;
    public function loaitin(){
        return $this->hasMany('App\loaitin');
    }

}
