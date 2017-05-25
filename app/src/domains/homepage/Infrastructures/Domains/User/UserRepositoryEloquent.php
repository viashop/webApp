<?php

namespace Loojas\Homepage\Infrastructures\Domains\User;

use Homepage\Domains\Models\User\User;
use Homepage\Domains\Models\User\UserRepositoryInterface;
use Loojas\Core\Repositories\EloquentAbstractRepository;

/**
 * Class EloquentUserRepository
 * @package Homepage\Infrastructures\Domains\User
 */
class EloquentUserRepository extends EloquentAbstractRepository implements UserRepositoryInterface
{

    /**
     * EloquentUserRepository constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }


}
