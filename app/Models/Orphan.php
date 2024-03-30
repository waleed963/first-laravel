<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Orphan extends Model
{
    use HasFactory;

    protected $table = 'orphans';

    protected $primarykey = 'id';

    protected $fillable = [
        'sponsorname',
        'sphonenumber',
        'slastdamount',
        'fromdate',
        'snote',
        'orphanname',
        'dateofbirth',
        'oamount',
        'todate',
        'onote',
        'guardianname',
        'cardid',
        'samount',
        'ophonenumber',
    ];
    
    
        // property
    public function Bail() : HasMany
    {
        return $this->hasMany(Bail::class, 'orphan_id', 'id');
    }
}
