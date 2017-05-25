<?php

namespace Loojas\Account\Applications\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LockController extends BaseController
{
    public function lock()
    {

        SEOMeta::setTitle( Config::get('constants-account.LOCK_TITLE') );
        SEOMeta::setDescription( Config::get('constants-account.LOCK_DESC' ) );
        SEOMeta::setCanonical(route('login'));
        return $this->view('lock');
    }
}
