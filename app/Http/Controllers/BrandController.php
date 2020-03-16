<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        
        $brands = Brand::all();
        if($brands){
            return ['brands' => $brands];
        }
        else{
            return ['brands' => 'Ingen brands tilgjengelig'];
        }
    
    }
  
    public function show($slug){

        $products= Brand::where('slug',$slug)->firstOrFail()->products;
        

        if($products->isEmpty()){
            $products = 'Dette brandet har ingen nåværende produkter';
            return $products;
        }
        else {
            return ['products' => $products];
        }
        
    }

}