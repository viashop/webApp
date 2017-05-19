<?php

namespace Homepage\Applications\Http\Controllers;

use Homepage\Domains\Models\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class DefaultController extends Controller
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
        return $this->view('homepage', compact('users'));
    }
}