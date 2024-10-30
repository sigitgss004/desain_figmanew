<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TentangModel;

class TentangController extends BaseController
{
    public function tentang()
    {
         // Inisialisasi model
         $tentangModel = new TentangModel();
        
         // Ambil semua data, data akan dikembalikan sebagai object
         $data['tentang'] = $tentangModel->first();
         
         // Kirim data ke view
         return view('Tentang', $data);
    }

}
