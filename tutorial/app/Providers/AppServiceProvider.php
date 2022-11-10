<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\ProductType;
use App\Models\Card;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      view()->composer('page.header', function ($view) {
        $productTypes = ProductType::all();
        if (session('cart')) {
          $oldCart = session('cart');
          $newCart = new Card($oldCart);
          $items = $newCart->items;
          $totalPrice = $newCart->totalPrice;
          $totalQty = $newCart->totalQty;
          $view -> with('productTypes', $productTypes) -> with(['card' => session('cart'), 'productCart' => $items, 'totalPrice' => $totalPrice, 'totalQty' => $totalQty]);
        } else {
          $view -> with('productTypes', $productTypes);
        }
      });
    }
}
