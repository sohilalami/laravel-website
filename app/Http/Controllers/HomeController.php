<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function showHome()
   {
       $products = [
           'Autoradio',
           'Cd speler',
           'Playstation',
           'MacBook Pro'
       ];

       $companies = DB::select('select * from companies');

        return view('home', [
            'producten' => $products,
            'companies' => $companies]);
   }

   public function showAboutUs()
   {
       return view('aboutus');
   }

   public function showName($name)
   {
       return view('showname', ['naam' => $name]);
   }
}
