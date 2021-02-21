<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegionsController extends Controller
{
    public $allowed_attributes = [
        'name',
        'apiname',
        'factbook',
        'numnations',
        'nations',
        'delegate',
        'delegatevote',
        'delegateauth',
        'founder',
        'founderauth',
        'officers',
        'power',
        'flag',
        'embassies',
        'lastupdate'
    ];

    public function index()
    {
        return response('Expecting format: /region/{name}  or /region/{name}/{attribute}...');
    }
}
