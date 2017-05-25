<?php

namespace Loojas\Account\Applications\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Config;
use Loojas\Contracts\Repositories\Account\RecoverPasswordRepositoryInterface;
use Loojas\Http\Requests\Account\RecoverPasswordRequest;
use Loojas\Repositories\Account\RecoverPasswordRepository;
use Loojas\Repositories\Account\UserRepository;
use Artesaos\SEOTools\Facades\SEOMeta;
use Exception;


/**
 * Class RecoverPasswordController
 * @package Loojas\Http\Controllers\Account
 */
class RecoverPasswordController extends BaseController
{
    /**
     * @var UserRepository
     */
    protected $repository;

    /**
     * RecoverPasswordController constructor.
     * @param RecoverPasswordRepository $repository
     */
    public function __construct(RecoverPasswordRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function recover()
    {

        SEOMeta::setTitle( Config::get('constants-account.RECOVER_TITLE') );
        SEOMeta::setDescription( Config::get('constants-account.RECOVER_DESC') );
        SEOMeta::setCanonical(URL::current());

        return $this->view('recover-password');
    }

    /**
     * @param RecoverPasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function recoverPost(RecoverPasswordRequest $request)
    {
        try {

            if ($this->repository instanceof RecoverPasswordRepositoryInterface) {
                $this->repository->recoverPassword($request);
                return redirect()->route('recover.notice');
            }

        } catch (Exception $e) {

            return redirect()->route('recover');

        }

    }

    /**
     * @return $this
     */
    public function notice()
    {
        SEOMeta::setTitle( Config::get('constants-account.RECOVER_NOTICE_TITLE') );
        SEOMeta::setDescription( Config::get('constants-account.RECOVER_NOTICE_DESC') );
        SEOMeta::setCanonical(URL::current());
        return $this->view('recover-password-notice');
    }

}
