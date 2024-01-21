<?php

namespace App\Containers\AppSection\Authorization\UI\API\Requests;

use App\Containers\AppSection\Authorization\Traits\IsResourceOwnerTrait;
use App\Ship\Parents\Requests\Request as ParentRequest;

class ListUserRolesRequest extends ParentRequest
{
    use IsResourceOwnerTrait;

    protected array $access = [
        'permissions' => 'manage-roles',
        'roles' => null,
    ];

    protected array $decode = [
        'id',
    ];

    protected array $urlParameters = [
        'id',
    ];

    public function rules(): array
    {
        return [];
    }

    public function authorize(): bool
    {
        return $this->hasAccess() || $this->isResourceOwner();
    }
}
