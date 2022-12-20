<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

  public $items = null;
  public $totalQty = 0;
  public $totalPrice = 0;

  /**
   * /username
   *
   * @param $items
   */
  public function __construct($oldCart)
  {
    if ($oldCart) {
      $this->items = $oldCart->items;
      $this->totalQty = $oldCart->totalQty;
      $this->totalPrice = $oldCart->totalPrice;
    }
  }

  public function add($item, $id, $qty = 1)
  {
    if ($item->promotion_price == 0) {
      $giohang = ['qty' => 0, 'price' => $item->unit_price, 'item' => $item];
      if ($this->items) {
        if (array_key_exists($id, $this->items)) {
          $giohang = $this->items[$id];
        }
      }
      $giohang['qty'] = $giohang['qty'] + $qty;
      $giohang['price'] = $item->unit_price * $giohang['qty'];
      $this->items[(int)$id] = $giohang;
      $this->totalQty = $this->totalQty + $qty;
      $this->totalPrice += $item->unit_price * $giohang['qty'];
    } else {
      $giohang = ['qty' => 0, 'price' => $item->promotion_price, 'item' => $item];
      if ($this->items) {
        if (array_key_exists($id, $this->items)) {
          $giohang = $this->items[$id];
        }
      }
      $giohang['qty'] = $giohang['qty'] + $qty;
      $giohang['price'] = $item->promotion_price * $giohang['qty'];
      $this->items[0] = $giohang;
      $this->totalQty = $this->totalQty + $qty;
      $this->totalPrice += $item->promotion_price * $giohang['qty'];
    }
  }


  //xóa 1         
  public function reduceByOne($id)
  {
    $this->items[$id]['qty']--;
    $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
    $this->totalQty--;
    $this->totalPrice -= $this->items[$id]['item']['price'];
    if ($this->items[$id]['qty'] <= 0) {
      unset($this->items[$id]);
    }
  }
  //xóa nhiều         
  public function removeItem($id)
  {
    $this->totalQty -= $this->items[$id]['qty'];
    $this->totalPrice -= $this->items[$id]['price'];
    unset($this->items[$id]);
  }
}
