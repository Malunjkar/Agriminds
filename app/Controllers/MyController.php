<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MyController extends BaseController
{
    public function loginf1()
    {
        return view('loginf1');
    } 
    public function logins2()
    {
        return view('logins2');
    } 
    public function index()
    {
        return view('index');
    } 
    public function products()
    {
        return view('Layouts/products');
    } 
    public function blog()
    {
        return view('Layouts/blog');
    } 
    public function contact()
    {
        return view('Layouts/contact');
    } 
    public function farmerlogin()
    {
        return view('Layouts/farmerlogin');
    } 
    public function splogin()
    {
        return view('Layouts/splogin');
    } 
   
   
    public function Home()
    {
        return view('home');
    }
    public function signupfarmer()
    {
        return view('Layouts/signupfarmer');
    }
    public function signupsp()
    {
        return view('Layouts/signupsp');
    }

    public function About()
    {
        return view('Layouts/about');
    }
    public function fpassrecover()
    {
        return view('Layouts/fpassrecover');
    }
    public function spassrecover()
    {
        return view('Layouts/spassrecover');
    }


}
?>