<?php

namespace App\Repositories;

use App\Models\Ponente;
use InfyOm\Generator\Common\BaseRepository;

class PonenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'pais',
        'foto'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Ponente::class;
    }
}
