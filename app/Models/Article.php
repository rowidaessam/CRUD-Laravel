<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    // {token title description number}
   protected $fillable = ["title", "description", "number", "user_id"];

   public function user(){
       return $this->belongsTo(User::class);
   }




}
