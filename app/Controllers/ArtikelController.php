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

        $data['artikeldata']  = $artikelDataModel->FindAll();

        // Kirim data ke view
        return view('Artikel', $data);
    }
}
