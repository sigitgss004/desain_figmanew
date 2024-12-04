<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArtikelModel;
use App\Models\DataArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        // // Inisialisasi model
        // $artikelModel = new artikelModel();

        // // Ambil semua data, data akan dikembalikan sebagai object
        // $data['artikel'] = $artikelModel->first();

        $artikelDataModel = new DataArtikelModel();

        $dataartikelmodel = new DataArtikelModel();
        
        $data['artikeldata']  = $artikelDataModel->FindAll();

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        // Kirim data ke view
        return view('Artikel/index', $data);
    }

    public function detail($slug)
    {
        // Menampilkan detail artikel berdasarkan slug
        $artikelModel = new DataArtikelModel();
        $artikel = $artikelModel->where('slug', $slug)->first(); // Mengambil produk berdasarkan slug

        if (!$artikel) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); // Jika produk tidak ditemukan
        }

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        $data['artikel'] = $artikel;
        return view('artikel/detail', ['artikel' => $artikel]);
    }


}
