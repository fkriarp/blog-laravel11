<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Mockery\Matcher\HasKey;

class Post extends Model
{

   use HasFactory;

   protected $fillable = [
    'title',
    'author',
    'slug',
    'body'
   ];

   public function author(): BelongsTo 
   {
      return $this->belongsTo(User::class);
   }

   public function category(): BelongsTo
   {
      return $this->belongsTo(Category::class);
   }
}
