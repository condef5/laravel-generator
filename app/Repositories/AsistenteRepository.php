<?php

namespace App\Repositories;

use App\Models\Asistente;
use InfyOm\Generator\Common\BaseRepository;

class AsistenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'universidad',
        'ponencia_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asistente::class;
    }
}
