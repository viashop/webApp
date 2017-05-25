<?php

namespace Loojas\Account\Infrastructures\Domains\Models\Role;

use Account\Domains\Models\Role\Role;
use Account\Domains\Models\Role\RoleRepository;

class EloquentRoleRepository implements RoleRepository
{
    /**
     * @var Role
     */
    private $role;

    /**
     * RoleRepositoryEloquent constructor.
     * @param Role $role
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getRoleForAttach()
    {
        return $this->role->where('name','shop_admin')->first();
    }

}