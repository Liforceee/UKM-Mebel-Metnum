<?php

namespace App\Controllers;

class Pengembang extends BaseController
{
    public function index(): string
    {
        return view('Pengembang');
    }
}