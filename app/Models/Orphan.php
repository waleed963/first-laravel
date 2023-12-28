<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orphan extends Model
{
    use HasFactory;

    protected $fillable = [
        'orphan-name' , 'guardian-name', 'date','oamount', 'card-id', 'olast-damount',
        'ophonenumber', 'onote', 'sponsor-id'
    ];


    // property
    public function Sponsor(){
        return $this->belongsTo(Sponsor::class);
    }
}
