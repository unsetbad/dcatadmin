<?php

namespace App\Admin\Repositories;

use App\People as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class People extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
