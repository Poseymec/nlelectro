<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Promotion;
use App\Models\Slider;
use App\Models\Product;


class AdminController extends Controller
{
    //
    /*------------------------------------------------------------------------------------------------------- */
    public function home(){
        return view('admin.home');
    }


    /*------------------------------------------------------------------------------------------------------- */
    public function addcategory(){
        return view('admin.addcategory');
    }
    

    /*------------------------------------------------------------------------------------------------------- */
    public function category(){
        $categories= Category::get();
        return view('admin.category')->with('categories',$categories);
    }
    
    

    /*------------------------------------------------------------------------------------------------------- */
    public function addslider(){
        return view('admin.addslider');
    }
    
    
    

    /*------------------------------------------------------------------------------------------------------- */
    public function slider(){
        $sliders=Slider::get();
        
        return view('admin.slider')->with('sliders',$sliders);
    }
    

    /*------------------------------------------------------------------------------------------------------- */
    public function addproduct(){
        $categories=Category::get();
        return view('admin.addproduct')->with("categories",$categories);
    }


    /*------------------------------------------------------------------------------------------------------- */
    public function product(){
        $products= Product::get();
        return view('admin.product')->with('products',$products);
    }


    /*------------------------------------------------------------------------------------------------------- */
    public function addpromo(){
        return view('admin.addpromo');
    }
    

    /*------------------------------------------------------------------------------------------------------- */
    public function promo(){
        $promos= Promotion::get();
        return view('admin.promo')->with("promos",$promos);
    }
 
 
 
}
