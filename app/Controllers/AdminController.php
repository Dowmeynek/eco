<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function admin()
    {
        return view ('/admin/index');
    }
    public function login()
    {
        return view ('adminlog');
    }
    public function register()
    {
        return view ('adminreg');
    }
}
