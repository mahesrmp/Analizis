<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Keep any existing methods
    
    // Add a new method for the about page
    public function aboutUs()
    {
        // Team members data
        $team = [
            [
                'name' => 'John Doe',
                'position' => 'Founder & CEO',
                'bio' => 'John memiliki pengalaman lebih dari 10 tahun dalam analisis data dan pengembangan platform edukasi.',
                'image' => 'images/team/john.png'
            ],
            [
                'name' => 'Sarah Johnson',
                'position' => 'Chief Data Scientist',
                'bio' => 'Sarah adalah pakar dalam machine learning dan analisis prediktif dengan latar belakang di industri teknologi.',
                'image' => 'images/team/sarah.png'
            ],
            [
                'name' => 'Budi Santoso',
                'position' => 'Head of Research',
                'bio' => 'Budi fokus pada penelitian tren skill dan kebutuhan industri di Indonesia dengan pengalaman 8 tahun.',
                'image' => 'images/team/budi.png'
            ]
        ];
        
        // Company milestones
        $milestones = [
            ['year' => '2022', 'event' => 'Pendirian AnalyZis sebagai platform analisis skill'],
            ['year' => '2023', 'event' => 'Peluncuran fitur tren skill dan role'],
            ['year' => '2024', 'event' => 'Kemitraan dengan 10+ platform kursus terkemuka'],
            ['year' => '2025', 'event' => 'Ekspansi layanan ke seluruh Indonesia']
        ];
        
        return view('about', compact('team', 'milestones'));
    }
}
