<?php

namespace App\Repositories;

use App\Models\Loop;
use InfyOm\Generator\Common\BaseRepository;

class LoopRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Loop::class;
    }
}
