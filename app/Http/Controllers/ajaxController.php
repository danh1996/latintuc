<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaitin;
class ajaxController extends Controller{
    public function layloaitin(Request $request){
        $dsLoaiTin=loaitin::where('idtl',$request->idTheLoai)->get();
        foreach ($dsLoaiTin as $lt){
            echo "<option value='".$lt->id."'>".$lt->tenlt."</option>";
        }
    }
    public function layhinhmoi(Request $request){
        $dsLoaiTin=loaitin::where('idtl',$request->idTheLoai)->get();
        foreach ($dsLoaiTin as $lt){
            echo "<option value='".$lt->id."'>".$lt->tenlt."</option>";
        }
    }
}
?>
