<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ServicesSite extends Model
{
   protected $fillable = [
      'title_services',
      'description',
      'position_site',
      'img',
   ];

   public function getTextHtmlAttribute()
   {
      return nl2br(e($this->text), false);
   }
}
