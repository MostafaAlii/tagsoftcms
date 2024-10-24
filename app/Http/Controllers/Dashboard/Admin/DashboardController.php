<?php
namespace App\Http\Controllers\Dashboard\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class DashboardController {
    public function index() {
        $notification = [
            'icon' => 'success',
            'title' => 'لوحة التحكم',
            'text' => 'مرحبًا بك في لوحة التحكم',
            'showConfirmButton' => false,
            'timer' => 1500
        ];
        return view('dashboard.admin.dashboard',['title' => 'Admin Dashboard', 'notification' => $notification]);
    }
}
