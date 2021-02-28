<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Nations;
use App\Models\Regions;

class NationsController extends Controller
{
    private $allowed_attributes = [
        'name',
        'apiname',
        'type',
        'fullname',
        'motto',
        'category',
        'unstatus',
        'endorsements',
        'issues_answered',
        'freedom',
        'region',
        'population',
        'tax',
        'animal',
        'currency',
        'demonym',
        'demonym2',
        'demonym2plural',
        'flag',
        'majorindustry',
        'govtpriority',
        'govt',
        'founded',
        'firstlogin',
        'lastlogin',
        'lastactivity',
        'influence',
        'freedomscores',
        'publicsector',
        'deaths',
        'leader',
        'capital',
        'religion',
        'factbooks',
        'dispatches',
        'dbid'
    ];

    public function index()
    {
        return response()->json(['error' => 'No input supplied'], 400);
    }

    public function getFullNationRecord($name)
    {
        $name = $this->normalize($name);
        $nation = Nations::where('apiname', $name)->firstOrFail();

        // Convert json strings to objects, for better looking results
        $nation->freedom = json_decode($nation->freedom)->freedom;
        $nation->govt = json_decode($nation->govt)->govt;
        $nation->freedomscores = json_decode($nation->freedomscores)->freedomscores;
        $nation->deaths = json_decode($nation->deaths)->deaths;

        // Return json string
        return response()->json($nation);
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
                $return[] = $this->returnJson($name, $attribute);
            }
        }
        return response()->json($return);
    }

    public function getEndotartList($name)
    {
        $name = $this->normalize($name);
        $endorsements_list = [];
        $search_query = [
            ['unstatus', '!=', 'Non-member'],
            ['apiname', '!=', $name]
        ];
        // Grab values for columns region,endorsements,apiname
        $nation = Nations::where('apiname', $name)->firstorFail(['region', 'endorsements', 'unstatus']);

        // Skip if not a WA member
        if ($nation->unstatus == 'Non-member') {
            return response()->json([
                'error' => 'Not a WA member'
            ], 400);
        }

        // Grab value for column nations
        $region = Regions::where('name', $nation->region)->first('nations');
        $region_nations_array = explode(',', $region->nations);
        // Grab column values for apiname,endorsements for all WA members (incl Delegate)
        $regions_wa_members = Nations::whereIn('apiname', $region_nations_array)
                                ->where($search_query)->get(['apiname', 'endorsements']);
        // If target nation is not found in each endorsement list, add to returned list
        foreach ($regions_wa_members as $member) {
            if (strpos($member->endorsements, $name) === false) {
                $endorsements_list[] = $member->apiname;
            }
        }
        return response()->json($endorsements_list);
    }

    private function normalize($input)
    {
        return str_replace(' ', '_', strtolower(urldecode($input)));
    }

    private function returnJson($name, $attribute)
    {
        $nation = Nations::where('apiname', $name)->firstOrFail();

        switch ($attribute) {
            case 'freedom':
            case 'govt':
            case 'freedomscores':
            case 'deaths':
                return json_decode($nation[$attribute]);
                break;
            default:
                return [$attribute => $nation[$attribute]];
        }
    }
}
