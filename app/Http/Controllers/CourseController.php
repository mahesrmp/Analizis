<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = [
            ['title' => 'Belajar Python', 'description' => 'Pemrograman Python untuk pemula.', 'link' => '#'],
            ['title' => 'Web Development', 'description' => 'Pelajari HTML, CSS, dan JavaScript.', 'link' => '#'],
            ['title' => 'Data Science', 'description' => 'Eksplorasi data dengan Python dan Pandas.', 'link' => '#'],
            ['title' => 'Machine Learning', 'description' => 'Pelajari model prediksi berbasis data.', 'link' => '#'],
            ['title' => 'Cyber Security', 'description' => 'Keamanan jaringan dan data Anda.', 'link' => '#'],
            ['title' => 'UI/UX Design', 'description' => 'Desain pengalaman pengguna yang menarik.', 'link' => '#'],
            ['title' => 'Cloud Computing', 'description' => 'Pelajari layanan cloud seperti AWS dan GCP.', 'link' => '#'],
            ['title' => 'DevOps', 'description' => 'Otomasi dan kolaborasi pengembangan.', 'link' => '#'],
            ['title' => 'Big Data', 'description' => 'Pelajari bagaimana mengolah data berukuran besar.', 'link' => '#'],
            ['title' => 'Internet of Things (IoT)', 'description' => 'Integrasi perangkat fisik dengan internet.', 'link' => '#'],
        ];

        return view('course', compact('courses'));
    }
}
