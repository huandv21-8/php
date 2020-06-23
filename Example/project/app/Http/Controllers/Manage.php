<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Manage extends Controller
{
    public function getdata($a, $b)
    {
        $x = '';
        if ($a == 0) {
            $x =  'pt vo nghiem.';
            return view('welcome', ['data' => $x]);
        }
        $x = 'pt co 1 nghiem x =' . (-$b / $a);

        return view('welcome', ['data' => $x]);

        // gọi đến hàm này getdata thì chuyển sang trang welcome bên phần view và chuyền dữ liệu $data sang

    }
}
