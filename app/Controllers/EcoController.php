<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class EcoController extends BaseController
{
    public function index()
    {
        //
    }
    public function taas()
    {
      return view('taas/nav');
    }
}
