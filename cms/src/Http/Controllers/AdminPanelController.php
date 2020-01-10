<?php

namespace Roocket\Cms\Http\Controllers;
use Roocket\Cms\Models\Admin;

class AdminPanelController extends BaseController
{
    public function index()
    {
        $name='ahmad';
        return view('cms::index',compact('name'));
//        return Cms\::listAdmin();
    }
}
