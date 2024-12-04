<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AktivitasModel;
use App\Models\DataAktivitasModel;
use CodeIgniter\HTTP\ResponseInterface;

class AktivitasController extends BaseController
{
    public function index()
    {
                        //  // Inisialisasi model
                        //  $aktivitasModel = new AktivitasModel();
        
                        //  // Ambil semua data, data akan dikembalikan sebagai object
                        //  $data['aktivitas'] = $aktivitasModel->first();

                        $aktivitasDataModel = new DataAktivitasModel();

                        $dataaktivitasmodel = new DataAktivitasModel();

                        $data['aktivitasdata']  = $aktivitasDataModel->FindAll();
                         

                        $lang = session()->get('lang') ?? 'id';
                        $data['lang'] = $lang;

                         // Kirim data ke view
                         return view('Aktivitas/index', $data);
    }

    public function detail($slug)
    {
        // Menampilkan detail aktivitas berdasarkan slug
        $aktivitasModel = new DataAktivitasModel();
        $aktivitas = $aktivitasModel->where('slug', $slug)->first(); // Mengambil produk berdasarkan slug

        if (!$aktivitas) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); // Jika produk tidak ditemukan
        }

        $lang = session()->get('lang') ?? 'id';
        $data['lang'] = $lang;

        $data['aktivitas'] = $aktivitas;
        return view('aktivitas/detail', ['aktivitas' => $aktivitas]);
    }
    
}
