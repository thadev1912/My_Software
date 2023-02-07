<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
class Dactinh_SanphamController extends Controller
{
    public function dactinh_sanpham()
    {
    $data=Sanpham::all();
    //dd($data);
    foreach($data as $dt)
        {
            echo $dt->san_pham;
            echo "<br>";
            //dd($dt->dactinh_sanpham);
            foreach($dt->dactinh_sanpham as $info)

                   {
                    //dd($info->chitiet_dactinh);
                    echo "đặc tính:  ";
                    echo $info->chi_tiet;
                    echo "<br>";
                //     foreach($info->chitiet_dactinh as $detail)
                //   echo $detail->chi_tiet;
                //   echo "<br>";
                   }
                  echo "<hr>";
             
           
        }
    }
}
