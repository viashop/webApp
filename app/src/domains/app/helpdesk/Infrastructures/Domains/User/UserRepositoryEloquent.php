<?php

namespace Loojas\Helpdesk\Infrastructures\Domains\User;

use Loojas\Helpdesk\Domains\Models\User\User;
use Loojas\Helpdesk\Domains\Models\User\UserRepositoryInterface;
use Loojas\Core\Repositories\EloquentAbstractRepository;

/**
 * Class EloquentUserRepository
 * @package Helpdesk\Infrastructures\Domains\User
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
