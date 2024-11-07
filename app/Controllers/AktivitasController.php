<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasModel;
use CodeIgniter\HTTP\ResponseInterface;

class AktivitasController extends BaseController
{
    public function index()
    {
                         // Inisialisasi model
                         $aktivitasModel = new AktivitasModel();
        
                         // Ambil semua data, data akan dikembalikan sebagai object
                         $data['aktivitas'] = $aktivitasModel->first();
                         
                         // Kirim data ke view
                         return view('Aktivitas', $data);
    }
}
