<?php

namespace App\Models;

use App\Models\Tema;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reuniones';

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
        'convocado',
        'tipoReunion',
        'fecha',
        'hora',
        'lugar',
        'orgaizador',
        'asistentes',
        'status'
    ];

    public function temas(){
        return $this->belongsToMany(Tema::class,'temareunion','id','idReunion');
    }
}
