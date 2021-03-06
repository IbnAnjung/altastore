<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{

  use HasFactory;
  
  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
    'created_at', 'updated_at'
  ];
  
  /**
   * belongs to one category
   * 
   * @return Eloquent 
   */
  public function category()
  {

    return $this->belongsTo(Category::class);

  }

  /**
   * many to many with charts
   * 
   * @return Eloquent
   */
  public function carts()
  {

    return $this->belongsToMany(Cart::class);

  }

  /**
   * many to many with checkouts
   * 
   * @return Eloquent
   */
  public function checkouts()
  {

    return $this->belongsToMany(Checkout::class);

  }

}