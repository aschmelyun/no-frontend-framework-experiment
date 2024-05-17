<?php

use App\Models\Form;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

// Route::get('/', function () {
//     return view('app-vue');
// });

// Route::get('/', function (Request $request) {
//     $vehicles = Vehicle::query();
//     if ($request->filled('make')) {
//         $vehicles->where('make', $request->input('make'));
//     }
//     if ($request->filled('color')) {
//         $vehicles->where('color', $request->input('color'));
//     }
//     $vehicles = $vehicles->get();

//     $possibleMakes = Vehicle::distinct('make')
//         ->orderBy('make')
//         ->pluck('make');

//     $possibleColors = Vehicle::distinct('color')
//         ->orderBy('color')
//         ->pluck('color');

//     if ($request->hasHeader('x-refresh')) {
//         return view('components/table', [
//             'vehicles' => $vehicles,
//         ]);
//     }

//     return view('app-html', [
//         'vehicles' => $vehicles,
//         'possibleMakes' => $possibleMakes,
//         'possibleColors' => $possibleColors,
//     ]);
// });

Route::get('/', function (Request $request) {
    $vehicles = Vehicle::query();
    if ($request->filled('make')) {
        $vehicles->where('make', $request->input('make'));
    }
    if ($request->filled('color')) {
        $vehicles->where('color', $request->input('color'));
    }
    $vehicles = $vehicles->get();

    $possibleMakes = Vehicle::distinct('make')
        ->orderBy('make')
        ->pluck('make');

    $possibleColors = Vehicle::distinct('color')
        ->orderBy('color')
        ->pluck('color');

    if ($request->hasHeader('Hx-Request')) {
        return view('components/table', [
            'vehicles' => $vehicles
        ]);
    }

    return view('app-htmx', [
        'vehicles' => $vehicles,
        'possibleMakes' => $possibleMakes,
        'possibleColors' => $possibleColors
    ]);
});

Route::get('/page/{page}', function ($page) {
    return view('page-htmx', [
        'page' => $page,
        'links' => [
            'prev' => $page > 1 ? $page - 1 : null,
            'next' => $page < 5 ? $page + 1 : null
        ]
    ]);
});

Route::get('/form', function () {
    return view('form-htmx');
});

Route::get('/form/{step}', function ($step) {
    session()->put('uuid', Str::uuid());

    return view('components/forms/step-' . $step);
});

Route::post('/form/{step}', function (Request $request, $step) {

    $validator = Validator::make($request->all(), [
        'name' => 'sometimes|required',
        'email' => 'sometimes|required|email',
        'phone' => 'sometimes|required',
        'make' => 'sometimes|required',
        'model' => 'sometimes|required',
        'year' => 'sometimes|required|numeric',
        'color' => 'sometimes|required',
    ]);

    if ($validator->fails()) {
        session()->flashInput($request->input());

        return view('components/forms/step-' . $step, [
            'errors' => $validator->errors()
        ]);
    }

    Form::updateOrCreate([
        'identifier' => session()->get('uuid')
    ], [
        'part-1' => $request->only(['name', 'email', 'phone']),
        'part-2' => $request->only(['make', 'model', 'year', 'color']),
        'part-3' => $request->only(['notes']),
    ]);

    if ($step >= 3) {
        return view('components/forms/complete');
    }

    return view('components/forms/step-' . ($step + 1));
});