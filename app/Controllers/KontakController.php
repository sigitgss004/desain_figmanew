<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\KontakModel;

class KontakController extends BaseController

{
    public function index()
    {
                 // Inisialisasi model
                 $kontakModel = new KontakModel();
        
                 // Ambil semua data, data akan dikembalikan sebagai object
                 $data['kontak'] = $kontakModel->first();
                 
                 // Kirim data ke view
                 return view('Kontak', $data);
    }
}
