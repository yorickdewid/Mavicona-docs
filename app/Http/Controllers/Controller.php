<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{
    use ValidatesRequests;

    public function getIndex()
    {
        return view('index');
    }

    public function getFaq()
    {
        return view('faq');
    }

    public function getChangeLog()
    {
        return view('changelog');
    }

    public function getDocOverview($module)
    {
        return view('doc_overview', ['title' => $module]);
    }

    public function getDocPage($module)
    {
        return view('doc_page', ['title' => $module]);
    }
}
