<?php

namespace App\Containers\AppSection\User\Actions;

use App\Ship\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\User\Data\Collections\UserCollection;
use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Pagination\LengthAwarePaginator;
use Prettus\Repository\Exceptions\RepositoryException;

class ListUsersAction extends ParentAction
{
    public function __construct(
        private readonly UserRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): LengthAwarePaginator|UserCollection
    {
        return $this->repository->addRequestCriteria()->paginate();
    }
}
