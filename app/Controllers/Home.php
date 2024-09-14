<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            ['icon' => 'fas fa-tachometer-alt', 'label' => 'Dashboard', 'url' => '/dashboard/admin'],
            ['icon' => 'fas fa-user-friends', 'label' => 'Pengguna', 'url' => '/menu/pengguna'],
            ['icon' => 'fas fa-money-bill', 'label' => 'Cash Flow', 'url' => '/cash-flow'],
            ['icon' => 'far fa-chart-bar', 'label' => 'Website', 'url' => '/website'],
            ['icon' => 'fas fa-tasks', 'label' => 'Pemasukan', 'url' => '/pemasukan'],
            ['icon' => 'fa fa-columns', 'label' => 'Pengeluaran', 'url' => '/pengeluaran'],
            ['icon' => 'fas fa-cogs', 'label' => 'Settings', 'url' => '/settings'],
            ['icon' => 'fas fa-power-off', 'label' => 'Logout', 'url' => '/logout'],
        ];

        session()->set('menu', $menu);

        return view('dashboard/admin');
    }

}
