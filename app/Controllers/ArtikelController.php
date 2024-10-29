<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ArtikelModel;

class ArtikelController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $artikelModel = new artikelModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        $data['artikel'] = $artikelModel->first();
        
        // Kirim data ke view
        return view('Artikel', $data);
    }
    
}