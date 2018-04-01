<?php

namespace App\Models;

use App\Models\Reunion;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'temas';

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
        'tema',
        'tiempo',
        'debate',
        'conclusion'
    ];

    public function reuniones(){
        return $this->belongsToMany(Reunion::class,'temareunion','id','idTema');
    }
}
