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

        $dataprodukmodel = new DataProdukModel();

        $data['produkdata'] = $produkDataModel->findAll();

        
         
         // Kirim data ke view
         return view('Produk/index', $data);
    }

    public function detail($slug)
    {
        // Menampilkan detail produk berdasarkan slug
        $produkModel = new DataProdukModel();
        $produk = $produkModel->where('slug', $slug)->first(); // Mengambil produk berdasarkan slug

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); // Jika produk tidak ditemukan
        }
        $data['produk'] = $produk;
        return view('produk/detail', ['produk' => $produk]);
    }
}


