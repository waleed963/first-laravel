<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'sponsor-name', 'slast-damount', 'samount', 'form-date', 'to-date',
        'sphonenumber', 'snote'
    ];


    //property
    public function Orphan(){
        return $this->hasMany(Orphan::class);
    }


}
