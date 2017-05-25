<?php

namespace Loojas\Store\Infrastructures\Domains\User;

use Loojas\Store\Domains\Models\User\User;
use Loojas\Store\Domains\Models\User\UserRepositoryInterface;
use Loojas\Core\Repositories\EloquentAbstractRepository;

/**
 * Class EloquentUserRepository
 * @package Store\Infrastructures\Domains\User
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
