<?php

namespace App\Repositories;

use App\Models\Ponencia;
use InfyOm\Generator\Common\BaseRepository;

class PonenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'ponente_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ponencia::class;
    }
}
