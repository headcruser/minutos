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

    public const ACTIVADA = 1;

    public const DESACTIVADA = 0;

    public function temas(){
        return $this->belongsToMany(Tema::class,'tema_reunion','idReunion','idTema');
    }

    public function formatHour(){
        $hour = DB::table($this->table)
                    ->select(DB::raw('DATE_FORMAT(hora, "%H:%I" ) as hora'))->get();
        return $hour->first();
    }

    /**
     * isStatusActive
     *
     * Determina si una reunion esta activada
     *
     * @return void
     */
    public function isStatusActive():bool
    {
        return $this->status == self::ACTIVADA;
    }

     /**
     * isNotActive
     *
     * Determina si una reunion esta desactivada
     *
     * @return void
     */
    public function isNotActive():bool
    {
        return $this->status == self::DESACTIVADA;
    }
}
