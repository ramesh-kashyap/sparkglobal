<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


 protected $fillable = 
 [
    'user_id', 'user_id_fk', 'roi_bonus','farming_profit','reward_profit','ttime','updated_at','created_at','orderId','total'
 ];


 public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 

 
}
