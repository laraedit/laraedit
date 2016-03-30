<?php

namespace LaraEdit\Controllers;

use Illuminate\Routing\Controller;

class LaraEditController extends Controller
{

    public function getDashboard()
    {
        return view('vendor.laraedit.laraedit');
    }

}
