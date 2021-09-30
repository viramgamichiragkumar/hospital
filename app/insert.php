<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insert extends Model
{
     protected $table="insert";
   protected $primarykey="id";

   protected $fillable=[

   		'name','lastname','address'
   ];

}
