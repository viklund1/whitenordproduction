<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function OpenServices() {
        $services = Service::orderByDesc('id')->get();
        return view('services/services', ['services' => $services]);
    }
}
