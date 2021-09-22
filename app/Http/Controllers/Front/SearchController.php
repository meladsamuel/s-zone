<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class SearchController extends Controller
{
     public function search(Request $req) {
        $data = Product::where('name', 'like', '%'.$req->input('query').'%')->get();

       if($data){
            return view('front.search', ['product'=>$data]);
       }


        return view('front.searcherror');



      }
}
