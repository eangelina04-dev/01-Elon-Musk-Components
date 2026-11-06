<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $companies = [
            [ 'name' => 'Tesla',
            'description' => 'Mobil listrik dan penyimpanan energi',
            ],
            ['name' => 'SpaceX',
            'description' => 'Roket dan satelit',
            ],
            ['name' => 'Neuralink',
            'description' => 'Chip otak untuk membantu penderita gangguan saraf',
            ],
            ['name' => 'xAI',
            'description' => 'Pengembangan AI (Grok).',
            ],
        ];

        return view('home', ['companies' => $companies]);
    }
}
