<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TermCondition extends Model  
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
    public $table = 'terms';
 
    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

}
