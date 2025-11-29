<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VelosController extends Controller
{
    public function createLead(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'user_type' => 'required|string|max:255',
            'timeline' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'email' => 'required|email',
            'country_code' => 'required|string|min:4',
            'phone' => 'required|integer|min:6',
        ]);

        $userType = ucfirst($request->user_type);
        $timeline = null;
        $propertyType = null;

        if($request->timeline == '1-3_month') {
            $timeline = '1-3 Month';
        }

        if($request->timeline == '6_month') {
            $timeline = '6 Month';
        }

        if($request->timeline == '1_year') {
            $timeline = '1 Year';
        }

        if($request->property_type == 'studio') {
            $propertyType = 'Studio';
        }

        if($request->property_type == '1br') {
            $propertyType = '1 Bed Apartment';
        }

        if($request->property_type == '2br') {
            $propertyType = '2 Bed Apartment';
        }

        $data = [
            'full_name' => $request->name,
            'user_type' => $userType,
            'purchase_timeline' => $timeline,
            'property_type' => $propertyType,
            'email' => $request->email,
            'phone' => $request->country_code.$request->phone,
        ];

        $response = Http::withHeaders([
            'Origin' => 'https://velosresidence.me'
            ])->post('https://develex.net/api/webhook/velos/create-lead', $data);

        if(!$response->successful()) {
            return response()->json(['status' => false, 'message' => $response->body()], 400);
        }

        return redirect('/');
    }
}
