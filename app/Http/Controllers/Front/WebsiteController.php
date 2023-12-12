<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class WebsiteController {
    public function index() {
        return view('website.home', ['title' => 'Home']);
    }
}