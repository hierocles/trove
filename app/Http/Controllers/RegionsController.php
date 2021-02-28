<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Nations;
use App\Models\Regions;

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
        return response()->json(['error' => 'No input supplied'], 400);
    }

    public function getFullRegionRecord($name)
    {
        $name = $this->normalize($name);
        $region = Regions::where('apiname', $name)->firstOrFail();

        $region->embassies = json_decode($region->embassies);
        $region->officers = json_decode($region->officers);

        // Return json string
        return response()->json($region);
    }

    public function getSingleAttribute($name, $attribute)
    {
        $name = $this->normalize($name);
        // Return json message if attribute isn't in allowed list
        if (!in_array($attribute, $this->allowed_attributes)) {
            return response()->json([
                'error' => 'Supplied attribute not in allowed list',
                'invalid' => $attribute
            ], 403);
        } else {
            $return = $this->returnJson($name, $attribute);
            return response()->json($return);
        }
    }

    public function getMultipleAttributes($name, $attributes)
    {
        $name = $this->normalize($name);
        $json = json_decode(urldecode($attributes));
        if (json_last_error() !== 0) {
            return response()->json([
                'error' => 'Invalid JSON',
                'error_reason' => json_last_error_msg()
            ], 400);
        }

        if (!property_exists($json, 'attributes')) {
            return response()->json([
                'error' => 'No attributes supplied'
            ], 400);
        }

        $attributes_list = explode(',', $json->attributes);
        $return = [];
        foreach ($attributes_list as $attribute) {
            if (!in_array($attribute, $this->allowed_attributes)) {
                return response()->json([
                    'error' => 'Supplied attribute not in allowed list',
                    'invalid' => $attribute
                ], 403);
            } else {
                $return[$attribute] = $this->returnJson($name, $attribute, true);
            }
        }
        return response()->json($return);
    }

    private function normalize($input)
    {
        return str_replace(' ', '_', strtolower(urldecode($input)));
    }

    private function returnJson($name, $attribute, $value_only = false)
    {
        $region = Regions::where('apiname', $name)->firstOrFail();
        $return = [];
        switch ($attribute) {
            case 'officers':
            case 'embassies':
                $return = json_decode($region[$attribute]);
                break;
            default:
                if ($value_only) {
                    $return = $region[$attribute];
                } else {
                    $return[$attribute] = $region[$attribute];
                }
        }
        return $return;
    }
}
