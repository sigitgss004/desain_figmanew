// File: app/Controllers/LanguageController.php

namespace App\Controllers;

use CodeIgniter\Controller;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        // Simpan bahasa yang dipilih ke session
        session()->set('lang', $lang);

        // Redirect pengguna kembali ke halaman sebelumnya
        return redirect()->back();
    }
}
