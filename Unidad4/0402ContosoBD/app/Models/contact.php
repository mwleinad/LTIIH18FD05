<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Contact extends Model {
   /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = "contact";

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'message'
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
    ];
}