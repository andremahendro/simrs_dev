<?php

namespace App\Controllers;

// use App\Libraries\Template;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function root($path = '')
    {
        // $template = new Template();
        if ($path !== '') {
            if (@file_exists(APPPATH . 'Views/' . $path . '.php')) {
                return view($path);
                // return $template->views($path, null);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            echo 'Page Not Found.';
        }
    }
}
