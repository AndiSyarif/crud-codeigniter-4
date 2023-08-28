<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index(): string
    {
        $title  = 'Dashboard';

        return view('dashboard/dashboard', [
            'title' => $title
        ]);
    }
}
