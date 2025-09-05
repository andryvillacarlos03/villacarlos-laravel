<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function cartPage(){
        return view('cart');
    }

        public function checkOutPage(){
        return view('checkout');
    }

        public function contactPage(){
        return view('contact');
    }

   

    public function shopPage(){
        return view('shop');
    }

    public function shopDetailPage(){
        return view('shopDetail');
    }

    public function testimonialPage(){
        return view('testimonial');
    }

    public function welcomePage(){
        return view('welcome');
    }



}
