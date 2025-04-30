<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $testimonials = [
            ['image' => 'https://via.placeholder.com/150', 'quote' => 'AnalyZis membantu saya memahami keterampilan yang dibutuhkan oleh perusahaan!', 'name' => 'Budi', 'role' => 'Data Scientist'],
            ['image' => 'https://via.placeholder.com/150', 'quote' => 'Platform ini sangat membantu dalam menyusun kurikulum berbasis tren IT terbaru.', 'name' => 'Siti', 'role' => 'Dosen IT'],
            ['image' => 'https://via.placeholder.com/150', 'quote' => 'Data dari AnalyZis membantu kami merancang pelatihan yang relevan!', 'name' => 'Andi', 'role' => 'HR Manager'],
        ];

        $events = [
            ['title' => 'WebinarClass: Data Science 101', 'date' => '5 April 2025', 'image' => 'webinarDS.png'],
            ['title' => 'WebinarClass: Cybersecurity Trends', 'date' => '15 Mei 2025', 'image' => 'webinarCS.png'],
        ];

        return view('dashboard', compact('testimonials', 'events'));
    }
}
