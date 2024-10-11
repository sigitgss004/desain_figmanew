<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Beranda');
    }
    public function Tentang(): string
    {
        return view('Tentang');
    }
    public function Artikel(): string
    {
        return view('Artikel');
    }
    public function Artikel1(): string
    {
        return view('Artikel1');
    }
    public function Artikel2(): string
    {
        return view('Artikel2');
    }
    public function Artikel3(): string
    {
        return view('Artikel3');
    }
    public function Artikel4(): string
    {
        return view('Artikel4');
    }
    public function Produk(): string
    {
        return view('Produk');
    }
    public function Produk1(): string
    {
        return view('Produk1');
    }
    public function Produk2(): string
    {
        return view('Produk2');
    }
    public function Produk3(): string
    {
        return view('Produk3');
    }
    public function Produk4(): string
    {
        return view('Produk4');
    }
    public function Aktivitas(): string
    {
        return view('Aktivitas');
    }
    public function Aktivitas1(): string
    {
        return view('Aktivitas1');
    }
    public function Aktivitas2(): string
    {
        return view('Aktivitas2');
    }
    public function Aktivitas3(): string
    {
        return view('Aktivitas3');
    }
    public function Aktivitas4(): string
    {
        return view('Aktivitas4');
    }
    public function Kontak(): string
    {
        return view('Kontak');
    }
}
