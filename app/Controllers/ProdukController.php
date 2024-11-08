<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataProdukModel;
use App\Models\ProdukModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukController extends BaseController
{
    public function index()
    {
        //  // Inisialisasi model
        //  $produkModel = new ProdukModel();
        
        //  // Ambil semua data, data akan dikembalikan sebagai object
        //  $data['produk'] = $produkModel->first();

        $produkDataModel = new DataProdukModel();

        $data['produkdata'] = $produkDataModel->findAll();

        
         
         // Kirim data ke view
         return view('Produk', $data);
    }
}
