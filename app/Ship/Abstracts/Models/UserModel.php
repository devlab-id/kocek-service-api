<?php

namespace App\Ship\Abstracts\Models;

use App\Ship\Contracts\HasResourceKey;
use App\Ship\Traits\ModelTrait;
use Illuminate\Foundation\Auth\User as LaravelAuthenticatableUser;

abstract class UserModel extends LaravelAuthenticatableUser implements HasResourceKey
{
    use ModelTrait;
}
