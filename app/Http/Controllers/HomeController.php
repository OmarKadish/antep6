<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
 //   function showView() {
   //     $users = DB::table('user')->get(); //Veritabanından kullanıcıları getiriyor.
    //    $users = User::all(); //Model kullanarak veri gösteriyor
    //      $name = $users->name;
  //      $Job = "Student";
   //     $city = "Şanlıurfa";
   //     return view('Hakkimda', compact( 'name'));
   // }

    public function createView()
    {
        return view('users.create');
    }
    function showUsers() {
        //$users = DB::table('users')->get();
        $users= User::all();
        return view('hakkimda', compact( 'users'));
    }

    function showProducts() {
        $Products = DB::table('products')->get();
        return view('products', compact( 'Products'));
    }

}
