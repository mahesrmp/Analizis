<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrenSkillRoleController extends Controller
{
    public function index()
    {
        $skills = [
            (object) ['name' => 'Python', 'growth' => 15],
            (object) ['name' => 'React.js', 'growth' => 12],
            (object) ['name' => 'Cloud Computing', 'growth' => 10],
            (object) ['name' => 'Cybersecurity', 'growth' => 9],
            (object) ['name' => 'DevOps', 'growth' => 8],
        ];

        $roles = [
            (object) ['name' => 'Backend Developer', 'demand' => 1200],
            (object) ['name' => 'Frontend Developer', 'demand' => 1000],
            (object) ['name' => 'Data Scientist', 'demand' => 850],
            (object) ['name' => 'Cybersecurity Analyst', 'demand' => 700],
            (object) ['name' => 'DevOps Engineer', 'demand' => 650],
        ];

        return view('trenskillrole', compact('skills', 'roles'));
    }
}
