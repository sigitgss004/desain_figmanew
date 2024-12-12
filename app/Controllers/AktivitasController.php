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
                         $aktivitasModel = new AktivitasModel();
        
                        //  // Ambil semua data, data akan dikembalikan sebagai object
                          $data['aktivitas'] = $aktivitasModel->first();

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
        // Model aktivitas
        $aktivitasModel = new DataAktivitasModel();
        $aktivitas = $aktivitasModel->where('slug', $slug)->orWhere('slug_en', $slug)->first(); // Ambil data berdasarkan slug
    
        // Jika aktivitas tidak ditemukan, lempar 404
        if (!$aktivitas) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    
        // Ambil bahasa dari session (default: 'id')
        $lang = session()->get('lang') ?? 'id';
    
        // Cek apakah slug cocok dengan bahasa aktif
        $correctSlug = ($lang === 'id') ? $aktivitas->slug : $aktivitas->slug_en;
        if ($slug !== $correctSlug) {
            // Redirect ke URL slug yang benar sesuai bahasa
            $correctUrl = ($lang === 'id') ? 'id/aktivitas' : 'en/activity';
            return redirect()->to(base_url("$correctUrl/$correctSlug"));
        }
    
        // Kirim data ke View
        $data = [
            'lang' => $lang,
            'aktivitas' => $aktivitas
        ];
    
        return view('aktivitas/detail', $data);
    }
}
