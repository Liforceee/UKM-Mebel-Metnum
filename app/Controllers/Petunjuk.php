<?php

namespace App\Controllers;

class Petunjuk extends BaseController
{
    public function index(): string
    {
        return view('Petunjuk');
    }
}
