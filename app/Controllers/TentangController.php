<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TentangModel;

class TentangController extends BaseController
{
    public function index()
    {
         // Inisialisasi model
         $tentangModel = new TentangModel();
        
         // Ambil semua data, data akan dikembalikan sebagai object
         $data['tentang'] = $tentangModel->first();
         
         // Kirim data ke view
         return view('Tentang', $data);
    }

}
//<?php

namespace App\Models;
use CodeIgniter\Model;

class TentangModel extends Model {
    protected $table = 'tentang';
    protected $primaryKey = 'id';
    
    public function getTentangData() {
        return $this->findAll(); // Ambil semua data jika hanya ada satu baris
    }
}
