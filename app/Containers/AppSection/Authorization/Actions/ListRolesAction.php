<?php

namespace App\Containers\AppSection\Authorization\Actions;

use App\Ship\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Authorization\Data\Collections\RoleCollection;
use App\Containers\AppSection\Authorization\Data\Repositories\RoleRepository;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Pagination\LengthAwarePaginator;
use Prettus\Repository\Exceptions\RepositoryException;

class ListRolesAction extends ParentAction
{
    public function __construct(
        private readonly RoleRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     * @throws BindingResolutionException
     */
    public function run(): LengthAwarePaginator|RoleCollection
    {
        $this->repository->addRequestCriteria();
        $this->repository->whereGuard(activeGuard());

        return $this->repository->paginate();
    }
}
