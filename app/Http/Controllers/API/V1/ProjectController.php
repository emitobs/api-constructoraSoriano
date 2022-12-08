<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function getProjects($id = null)
    {
        if ($id != null) {
            $project_name = Str::replace('-',' ',$id);
            return Project::where('name',$project_name)->get()->first();
        } else {
            return Project::where('disabled', 0)->get();
        }
    }
}
