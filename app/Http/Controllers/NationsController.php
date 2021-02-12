<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nations;

class NationsController extends Controller
{
    public function index()
    {
        return response('Expecting format: /nation/{name}  or /nation/{name}/{attribute}...');
    }

    public function getFullNationRecord($name)
    {
        $nation = Nations::where('name', $name)->firstOrFail();

        // Convert json strings to objects, for better looking results
        $nation->freedom = json_decode($nation->freedom);
        $nation->govt = json_decode($nation->govt)->govt;
        $nation->freedomscores = json_decode($nation->freedomscores)->freedomscores;
        $nation->deaths = json_decode($nation->deaths)->deaths;

        // Return json string
        return response()->json($nation);
    }
}
