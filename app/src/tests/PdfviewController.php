<?php

namespace Loojas\Core\Http\Controllers\Tests;

use Illuminate\Http\Request;
use Loojas\Core\Http\Controllers\Controller;
use Modeling\Domains\Models\User\User;
use PDF;


class PdfviewController extends Controller
{

    public function index()
    {
        $users = User::all();
        return PDF::loadView('tests.pdf.dompdf', compact('users'))
            ->stream();
    }
}
