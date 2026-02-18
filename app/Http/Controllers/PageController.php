<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "Nama: Shafiqa Nabila <br> NIM: 23XXXXXXX";
    }

    public function articles($id) {
        return "Halaman Artikel dengan ID ".$id;
    }
}
