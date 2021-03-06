<?php

namespace Store\Applications\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Vialoja\Core\Http\Controllers\AbstractController;

class BaseController extends AbstractController
{

    /**
     * @var string
     */
    protected $viewNamespace = 'store::';


    /**
     * Rename viewNamespace
     * @param null $view
     * @param array $data
     * @param array $mergeData
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    protected function view($view = null, $data = [], $mergeData = [])
    {

        if (!empty($this->viewNamespace) && !str_contains($view, '::')) {
            $view = $this->viewNamespace . $view;
        }

        return view($view, $data, $mergeData);
    }

}
