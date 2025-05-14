<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrenSkillRoleController extends Controller
{
    public function index()
    {
        $roles = [
            (object) [
                'id' => 1,
                'name' => 'Backend Developer',
                'demand' => 1200,
                'skills' => ['Python', 'Cloud Computing']
            ],
            (object) [
                'id' => 2,
                'name' => 'Frontend Developer',
                'demand' => 1000,
                'skills' => ['React.js', 'JavaScript']
            ],
            (object) [
                'id' => 3,
                'name' => 'Data Scientist',
                'demand' => 850,
                'skills' => ['Python', 'Data Analysis']
            ],
            (object) [
                'id' => 4,
                'name' => 'Cybersecurity Analyst',
                'demand' => 700,
                'skills' => ['Cybersecurity', 'Networking']
            ],
            (object) [
                'id' => 5,
                'name' => 'DevOps Engineer',
                'demand' => 650,
                'skills' => ['DevOps', 'Cloud Computing']
            ],
        ];

        $skills = collect([
            ['id' => 1, 'name' => 'Python', 'growth' => 15],
            ['id' => 2, 'name' => 'React.js', 'growth' => 12],
            ['id' => 3, 'name' => 'Cloud Computing', 'growth' => 10],
            ['id' => 4, 'name' => 'Cybersecurity', 'growth' => 9],
            ['id' => 5, 'name' => 'DevOps', 'growth' => 8],
            ['id' => 6, 'name' => 'JavaScript', 'growth' => 7],
            ['id' => 7, 'name' => 'Data Analysis', 'growth' => 6],
        ])->map(fn($skill) => (object) $skill);

        return view('trenskillrole', compact('skills', 'roles'));
    }
    
    public function show($id)
    {
        $skills = [
            1 => [
                'name' => 'Python',
                'growth' => 15,
                'description' => 'Python adalah bahasa pemrograman serbaguna yang banyak digunakan dalam pengembangan web, data science, kecerdasan buatan, dan otomatisasi.',
                'bootcamps' => [
                    ['name' => 'Python Bootcamp: Go from zero to hero - Udemy', 'url' => 'https://www.udemy.com/course/complete-python-bootcamp/'],
                    ['name' => 'Python for Everybody - Coursera', 'url' => 'https://www.coursera.org/specializations/python'],
                    ['name' => 'Learn Python 3 - Codecademy', 'url' => 'https://www.codecademy.com/learn/learn-python-3'],
                    ['name' => 'Python for Data Science - edX', 'url' => 'https://www.edx.org/professional-certificate/python-data-science']
                ],
                'courses' => [
                    'Python Developer - PT Teknologi Indonesia',
                    'Data Scientist - AI Solutions',
                    'Backend Engineer - Startup XYZ'
                ]
            ],
            2 => [
                'name' => 'React.js',
                'growth' => 12,
                'description' => 'React.js adalah library JavaScript populer untuk membangun antarmuka pengguna yang interaktif dan dinamis.',
                'bootcamps' => [
                    ['name' => 'React.js Developer Course - Udemy', 'url' => 'https://www.udemy.com/course/react-the-complete-guide/'],
                    ['name' => 'Front-End Web UI Frameworks - Coursera', 'url' => 'https://www.coursera.org/learn/front-end-react'],
                ],
                'courses' => [
                    'Frontend Developer - PT Web Solutions',
                    'React.js Engineer - Startup Alpha'
                ]
            ]
        ];

        if (!array_key_exists($id, $skills)) {
            return redirect()->route('tren_skill_role')->with('error', 'Skill tidak ditemukan!');
        }

        $trendData = [
            'years' => range(date('Y') - 4, date('Y')),
            'values' => [50, 65, 80, 95, 120]
        ];

        return view('detailskill', ['skill' => $skills[$id], 'trendData' => $trendData]);
    }
}
