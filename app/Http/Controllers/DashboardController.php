<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function filterWfa(Request $request)
{
    $category = $request->input('category', 'Normal'); 
    $ageRangesN = [
        [0, 5],
        [6, 11],
        [12, 23],
        [24, 35],
        [36, 47],
        [48, 59]
    ];
    $countsByAgeRangeN = [];

    foreach ($ageRangesN as $rangeN) {
        [$ageStartN, $ageEndN] = $rangeN;

        $wfaCountsN = Patients::select(DB::raw('gender, COUNT(*) as count'))
            ->where('wfa', $category)
            ->whereBetween(DB::raw('TIMESTAMPDIFF(MONTH, birthday, NOW())'), [$ageStartN, $ageEndN])
            ->groupBy('gender')
            ->get();

        $countsByAgeRangeN[] = [
            'boys' => $wfaCountsN->firstWhere('gender', 'male')?->count ?? 0,
            'girls' => $wfaCountsN->firstWhere('gender', 'female')?->count ?? 0,
        ];
    }

    return response()->json($countsByAgeRangeN);
}

public function filterLfa(Request $request)
{
    $category = $request->input('hcategory', 'Normal'); 
    $ageRangesLfaN = [
        [0, 5],
        [6, 11],
        [12, 23],
        [24, 35],
        [36, 47],
        [48, 59]
    ];
    $countsByAgeRangeLfaN = [];
    foreach ($ageRangesLfaN as $rangeLfaN) {
        [$ageStartLfaN, $ageEndLfaN] = $rangeLfaN;

        $lfaCountsLfaN = Patients::select(DB::raw('gender, COUNT(*) as count'))
            ->where('hfa', $category)
            ->whereBetween(DB::raw('TIMESTAMPDIFF(MONTH, birthday, NOW())'), [$ageStartLfaN, $ageEndLfaN])
            ->groupBy('gender')
            ->get();

        // Correct the variable name from $wfaCountsN to $wfaCountsLfa
        $countsByAgeRangeLfaN[] = [
            'boys' => $lfaCountsLfaN->firstWhere('gender', 'male')?->count ?? 0,
            'girls' => $lfaCountsLfaN->firstWhere('gender', 'female')?->count ?? 0,
        ];
    }

    return response()->json($countsByAgeRangeLfaN);
}


public function filterWfl(Request $request)
{
    $category = $request->input('wflcategory', 'Normal'); 
    $ageRangesWflN = [
        [0, 5],
        [6, 11],
        [12, 23],
        [24, 35],
        [36, 47],
        [48, 59]
    ];
    $countsByAgeRangeWflN = [];
    foreach ($ageRangesWflN as $rangeWflN) {
        [$ageStartWflN, $ageEndWflN] = $rangeWflN;

        $wflCountsWflN = Patients::select(DB::raw('gender, COUNT(*) as count'))
            ->where('wfl_h', $category)
            ->whereBetween(DB::raw('TIMESTAMPDIFF(MONTH, birthday, NOW())'), [$ageStartWflN, $ageEndWflN])
            ->groupBy('gender')
            ->get();

        // Correct the variable name from $wfaCountsN to $wfaCountsLfa
        $countsByAgeRangeWflN[] = [
            'boys' => $wflCountsWflN->firstWhere('gender', 'male')?->count ?? 0,
            'girls' => $wflCountsWflN->firstWhere('gender', 'female')?->count ?? 0,
        ];
    }

    return response()->json($countsByAgeRangeWflN);
}



    public function index(Request $request){
        

            $countTotalPatients = Patients::count();

            $ageRangesN = [
                [0, 5],
                [6, 11],
                [12, 23],
                [24, 35],
                [36, 47],
                [48, 59]
            ];
            $countsByAgeRangeN = [];
            
            foreach ($ageRangesN as $rangeN) {
                [$ageStartN, $ageEndN] = $rangeN;
        
                $wfaCountsN = Patients::select(DB::raw('gender, COUNT(*) as count'))
                    ->where('wfa', 'Normal')
                    ->whereBetween(DB::raw('TIMESTAMPDIFF(MONTH, birthday, NOW())'), [$ageStartN, $ageEndN])
                    ->groupBy('gender')
                    ->get();
        
                $countsByAgeRangeN[] = [
                    'boys' => $wfaCountsN->firstWhere('gender', 'male')?->count ?? 0,
                    'girls' => $wfaCountsN->firstWhere('gender', 'female')?->count ?? 0,
                ];
            }
    
    

        // ========================================================================================== //
        //                                      Length/Height for Age Normal Chart                            //
        // ========================================================================================== //


        $ageRangesLfaN = [
            [0, 5],
            [6, 11],
            [12, 23],
            [24, 35],
            [36, 47],
            [48, 59]
        ];

        $countsByAgeRangeLfaN  = [];

        foreach ($ageRangesLfaN  as $rangeLfaN ) {
            [$ageStartLfaN , $ageEndLfaN  ] = $rangeLfaN  ;

            $lfaCountsLfaN   = Patients::select(DB::raw('gender, COUNT(*) as count'))
                ->where('hfa', 'Normal')
                ->whereBetween(DB::raw('TIMESTAMPDIFF(MONTH, birthday, NOW())'), [$ageStartLfaN, $ageEndLfaN ])
                ->groupBy('gender')
                ->get();

            $countsByAgeRangeLfaN  [] = [
                'boys' => $lfaCountsLfaN ->firstWhere('gender', 'male')?->count ?? 0,
                'girls' => $lfaCountsLfaN ->firstWhere('gender', 'female')?->count ?? 0,
            ];
        }

        // ========================================================================================== //
        //                                    Weight for  Length/Height Normal                          //
        // ========================================================================================== //

        $ageRangesWflN = [
            [0, 5],
            [6, 11],
            [12, 23],
            [24, 35],
            [36, 47],
            [48, 59]
        ];

        $countsByAgeRangeWflN  = [];

        foreach ($ageRangesWflN  as $rangeWflN ) {
            [$ageStartWflN , $ageEndWflN  ] = $rangeWflN  ;

            $wflCountsWflN   = Patients::select(DB::raw('gender, COUNT(*) as count'))
                ->where('wfl_h', 'Normal')
                ->whereBetween(DB::raw('TIMESTAMPDIFF(MONTH, birthday, NOW())'), [$ageStartWflN, $ageEndWflN])
                ->groupBy('gender')
                ->get();

            $countsByAgeRangeWflN  [] = [
                'boys'  => $wflCountsWflN ->firstWhere('gender', 'male')?->count ?? 0,
                'girls' => $wflCountsWflN ->firstWhere('gender', 'female')?->count ?? 0,
            ];
        }

        return view('layouts.dashboard', 
        compact('countsByAgeRangeN',  'countsByAgeRangeLfaN','countsByAgeRangeWflN','countTotalPatients'));

}
}