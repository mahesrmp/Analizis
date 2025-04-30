<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
{
    $events = [
        [
            'title' => 'WebinarClass: Data Science 101',
            'date' => '5 April 2025',
            'description' => 'Kelas intensif untuk pemula yang ingin belajar dasar-dasar Data Science.',
            'image' => 'webinarDS.png',
            'speaker' => 'Jane Smith',
            'platform' => 'Google Meet',
            'duration' => '3 jam'
        ],
        [
            'title' => 'Webinar: Cybersecurity Trends',
            'date' => '15 Mei 2025',
            'description' => 'Pelajari tren keamanan siber terbaru dan cara melindungi data Anda.',
            'image' => 'webinarCS.png',
            'speaker' => 'Alice Johnson',
            'platform' => 'Microsoft Teams',
            'duration' => '1,5 jam'
        ],
    ];

    return view('event', compact('events'));
}

}
