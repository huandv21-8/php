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
        // gọi đến hàm getdata thì chuyển sang trang welcome bên phần view và chuyền dữ liệu $x sang

    }

    public function tinhgiaithua($n)
    {
        $giaithua = 1;
        for ($i = 0; $i < $n; $i++) {
            $giaithua *= $n;
        }
        return view('welcome', ['giathua' => $giaithua]);
    }


    public function inputpPtb2(Request $request)
    {
        return view('ptb2');
    }

    public function ptb2(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;
        $x1 = $x2 = '';
        $ketqua = '';
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    $ketqua = 'pt vo so nghiem';
                    return view('ptb2', ['ketqua' => $ketqua]);
                }
                $ketqua = 'pt vo nghiem';
                return view('ptb2', ['ketqua' => $ketqua]);
            }
            $ketqua = 'pt co 1 nghiem x= ' . (-$c / $b);
            return view('ptb2', ['ketqua' => $ketqua]);
        } else {
            $delta = ($b * $b) - (4 * $a * $c);
            if ($delta > 0) {
                $x1 = (-$b + sqrt($delta)) / (2 * $a);
                $x2 = (-$b - sqrt($delta)) / (2 * $a);
                $ketqua = 'x1 = '.$x1.', x2 = '.$x2;
                return view('ptb2', ['ketqua' => $ketqua]);
            } else if ($delta == 0) {
                $x1 = (-$b / (2 * $a));
                $ketqua = 'x1 = x2 = '.$x1;
                return view('ptb2', ['ketqua' => $ketqua]);
            } else {
                $ketqua = 'pt vo nghiem';
                return view('ptb2', ['ketqua' => $ketqua]);
            }
        }
    }
}
