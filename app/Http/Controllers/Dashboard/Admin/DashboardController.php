<?php
namespace App\Http\Controllers\Dashboard\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class DashboardController {
    public function index() {
        return view('dashboard.admin.dashboard',['title' => 'Admin Dashboard']);
    }
}