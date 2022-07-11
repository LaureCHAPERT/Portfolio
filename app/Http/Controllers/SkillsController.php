<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class SkillsController extends Controller
{
    public function index()
    {

        return view('competences', [
            'competences' => Data::getSkills()
        ]);
    }
}
