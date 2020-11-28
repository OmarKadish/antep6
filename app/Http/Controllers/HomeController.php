<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    function showView() {
        $name = "Omar";
        $Job = "Student";
        $city = "Şanlıurfa";
        return view('Hakkimda', compact( 'name', 'job', 'city'));
    }
}
