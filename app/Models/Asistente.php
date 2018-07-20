<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Asistente
 * @package App\Models
 * @version August 24, 2017, 6:47 pm UTC
 */
class Asistente extends Model
{
    use SoftDeletes;

    public $table = 'asistentes';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'universidad',
        'ponencia_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'universidad' => 'string',
        'ponencia_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [];

    public function ponencia()
    {
        return $this->belongsTo('App\Models\Ponencia');
    }

}
