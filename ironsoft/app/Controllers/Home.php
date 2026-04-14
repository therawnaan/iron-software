<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    /**
     * Load the JSON data source and pass it to the view.
     */
    public function index(): string
    {
        $jsonPath = APPPATH . 'Data/content.json';
        $content  = json_decode(file_get_contents($jsonPath), true);

        $data = [
            'hero'         => $content['hero'],
            'cta'          => $content['cta'],
            'features'     => $content['features'],
            'why'          => $content['why'],
            'early_access' => $content['early_access'],
            'products'     => $content['products'],
        ];

        return view('home', $data);
    }
}
