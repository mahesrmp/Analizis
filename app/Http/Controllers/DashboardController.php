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

        return view('dashboard', compact('testimonials'));
    }
}
