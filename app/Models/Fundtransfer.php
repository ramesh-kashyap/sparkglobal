<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundtransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'transfer_id', 'transfered_id', 'user_id_from','user_id_to','amount','transfer_date'
    ];


        public function userFrom()
        {
            return $this->belongsTo('App\Models\User', 'transfer_id');
        } 

        
        public function userto()
        {
            return $this->belongsTo('App\Models\User', 'transfered_id');
        } 

}
