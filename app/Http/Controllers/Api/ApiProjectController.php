<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use App\Models\Admin\Technology;
use App\Models\Admin\Type;
use Illuminate\Http\Request;

class ApiProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies')->get();

        return response()->json([
            'succes' => true,
            'posts' => $projects
        ]);
    }
}