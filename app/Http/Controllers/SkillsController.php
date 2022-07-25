<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class SkillsController extends Controller
{
    public function index()
    {

        return view('skills', [
            'competences' => Data::getSkills()
        ]);
    }
}
