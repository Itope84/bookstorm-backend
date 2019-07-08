<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\MaterialResource;
use App\Material;

class MaterialController extends Controller
{
    public function index()
    {
        return MaterialResource::collection(Material::with('related_course')->with('uploaded_by')->paginate(request()->perpage ?? 30));
    }
}
