<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;


class PageController extends Controller
{
    public function getIndex() {
        $slide = Slide::all();
        $products = Product::all();
        return view('page.trangchu', compact('slide', 'products'));
    }    
			
    public function getLoaiSp(){				
    	return view('page.loai_sanpham');			
    }		
    
    public function getChitiet() {
        return view('page.chitiet_sanpham');
    }

    public function getLienhe()
    {
        return view('page.lienhe'); 
    }

    public function getAbout() {
        return view('page.about'); 
    }
}				



