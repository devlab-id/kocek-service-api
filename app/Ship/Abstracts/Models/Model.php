<?php

namespace App\Ship\Abstracts\Models;

use App\Ship\Contracts\HasResourceKey;
use App\Ship\Traits\ModelTrait;
use Illuminate\Database\Eloquent\Model as LaravelEloquentModel;

abstract class Model extends LaravelEloquentModel implements HasResourceKey
{
    use ModelTrait;
}
