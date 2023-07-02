<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use Illuminate\Http\Request;

class ApiProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return response()->json([
            'succes' => true,
            'posts' => $projects
        ]);
    }
}