<?php

namespace App\Containers\AppSection\User\UI\API\Requests;

use App\Containers\AppSection\Authorization\Traits\IsResourceOwnerTrait;
use App\Ship\Parents\Requests\Request as ParentRequest;

class DeleteUserRequest extends ParentRequest
{
    use IsResourceOwnerTrait;

    protected array $access = [
        'permissions' => 'delete-users',
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
