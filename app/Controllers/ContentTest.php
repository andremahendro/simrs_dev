<?php

namespace App\Controllers;

class ContentTest extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'CRM',
            'pagetitle' => 'Dashboard',
            'content' => 'content_test.php' // nama file konten yang ingin dimuat
        ];

        return view('_base_view', $data);
    }

    public function root($path = '')
    {
        $data = [
            'title' => 'CRM',
            'pagetitle' => 'Dashboard',
            'content' => 'content_test.php' // nama file konten yang ingin dimuat
        ];

        if ($path !== '') {
            if (@file_exists(APPPATH . 'Views/' . $path . '.php')) {
                return view('_base_view', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            echo 'Page Not Found.';
        }
    }
}
