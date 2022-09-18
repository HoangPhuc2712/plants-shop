<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    
    protected $table = 'suppliers';

    protected $fillable = [
        'id',
    	'name',
    	'address',
    	'phone',
    	'email',
    ];
    /**
     *
     * @var bool
     */
    public $timestamps = true;
}
