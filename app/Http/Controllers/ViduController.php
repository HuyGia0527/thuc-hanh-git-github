<?php   
namespace App\http\Controllers;
use Illuminate\Support\Facades\DB;

class ViduController{
    public function Trangchu(){
        $data = DB::select("select * from sach order by gia_ban asc limit 0,8");
        return view("index", compact("data"));
    }
    public function chiTietSach(){
        return view("components.book-detail-layout");
    }
}
