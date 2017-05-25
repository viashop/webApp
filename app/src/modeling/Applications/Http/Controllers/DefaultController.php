<?php

namespace Loojas\Modeling\Applications\Http\Controllers;

use Illuminate\Http\Request;
use Loojas\Modeling\Domains\Models\User\UserRepositoryInterface;


class DefaultController extends BaseController
{

    /**
     * @var UserRepositoryInterface
     */
    private $user;

    public function __construct(UserRepositoryInterface $user)
    {

        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->getAll(true, 5);
        return $this->view('home', compact('users'));
    }
}
