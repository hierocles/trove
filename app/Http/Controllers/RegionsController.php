<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public function index() {
        return response('Expecting format: /region/{name}  or /region/{name}/{attribute}...');
    }
}
