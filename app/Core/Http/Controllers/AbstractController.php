<?php

namespace Vialoja\Core\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as LaravelBaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class AbstractController extends LaravelBaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
