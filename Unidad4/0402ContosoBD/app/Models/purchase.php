<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Purchase extends Model {
   /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = "purchase";

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'product'
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
    ];
}