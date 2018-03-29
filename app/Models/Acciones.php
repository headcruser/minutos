<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acciones extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'acciones';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'elementos',
        'responsable',
        'plazo',
    ];
}
