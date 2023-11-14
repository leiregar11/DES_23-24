<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MountainController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $mountainsInEurope= DB::table('mountains')
        ->where('belongsToRange','=',false)
        ->where('firstClimbDate', '>', '2000-01-01')
        ->where('continent', 'Europe')
        ->get();


        $tallOrNotInRange=DB::table('mountains')
        ->where(function ($query) {
            $query->where('height', '>=', 1500)
                ->orWhere('belongsToRange', false)
                ->orWhere(function ($query) {
                    $query->whereNotIn('name', ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u']);
                });
        })
        ->get();

        return view('mountains', [
            'mountainsInEurope' => $mountainsInEurope,
            'tallOrNotInRange' => $tallOrNotInRange,
        ]);
    }
}
