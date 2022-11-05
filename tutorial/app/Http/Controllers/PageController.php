<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;

class PageController extends Controller
{
  public function getIndex() {
    $slide = Slide::all();
    $new_product = Product::where('new', 1)->paginate(10);;
    $top_products = Product::where('promotion_price','<>',0)->paginate(4);											
    return view("page.trangchu")->with("slides", $slide)->with("products", $new_product)->with('topProducts', $top_products);
  }

  public function getProductsWithType($id) {
    $products = Product::where("id_type", $id) -> get();
    $top_products = Product::where('promotion_price','<>',0)->paginate(4);											
    $productTypes = ProductType::all();
    $currentType = ProductType::where('id', $id) -> get();
    return view("page.product_type")
      ->with("products", $products)
      ->with('topProducts', $top_products)
      ->with('productTypes', $productTypes)
      ->with('currentType', $currentType);
  }
}
