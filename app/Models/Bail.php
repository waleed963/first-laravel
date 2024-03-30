<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bail extends Model
{
    use HasFactory;

    protected $table = 'bailsorphan';

    
    protected $primarykey = 'id';

    protected $fillable = [
        'orphanname',
        'oamount',
        'bnote',
        'guardianname',
        'cardid',
        'olastdamount',
        'ophonenumber',
        'chekbail',
        'orphan_id',
        
    ];

        // property
        public function Orphan() : BelongsTo
        {
            return $this->belongsTo(orphan::class, 'orphan_id', 'id');
        }
}
