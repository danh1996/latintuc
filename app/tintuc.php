<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    //
    protected $table="tin";
    protected $fillable=['id','tieude','tieudekd','tomtat','hinh','content','idlt','idtl','solanxem','anhien'];
    public $timestamps=true;
    public function loaitin(){
        return $this->belongsTo('App\loaitin','idlt');
    }

}
