<?php

namespace App\Containers\AppSection\Authorization\Models;

use App\Ship\Contracts\HasResourceKey;
use App\Ship\Traits\ModelTrait;
use App\Containers\AppSection\Authorization\Data\Collections\PermissionCollection;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission implements HasResourceKey
{
    use ModelTrait;

    protected string $guard_name = 'api';

    protected $fillable = [
        'name',
        'guard_name',
        'display_name',
        'description',
    ];

    public function newCollection(array $models = []): PermissionCollection
    {
        return new PermissionCollection($models);
    }
}
