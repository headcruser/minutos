<?php

namespace Minuta\Models;

use Minuta\Models\Tema;
use Illuminate\Support\Facades\DB;
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
        'organizador',
        'asistentes',
        'status'
    ];

    public function temas(){
        return $this->belongsToMany(Tema::class,'tema_reunion','idReunion','idTema');
    }

    public function formatHour(){
        $hour = DB::table($this->table)
                    ->select(DB::raw('DATE_FORMAT(hora, "%H:%I" ) as hora'))->get();
        return $hour->first();
    }
}
