<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;
    protected $table = 'user_addresses';
    protected $primaryKey = 'address_id';
    protected $fillable = [
        'user_id',
        'city',
        'address_line1',
        'post_code',
        'state',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User::class');
    }

}
