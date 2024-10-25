<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BerandaModel;

class BerandaController extends BaseController
{
    public function index()
    {
        // Inisialisasi model
        $berandaModel = new BerandaModel();
        
        // Ambil semua data, data akan dikembalikan sebagai object
        $data['beranda'] = $berandaModel->first();
        
        // Kirim data ke view
        return view('Beranda', $data);
    }
    
}
