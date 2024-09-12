<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function handleQuery(Request $request)
    {
        // Validate the request if needed
        $request->validate([
            'queryforexcel' => 'required|string',
        ]);

        // Process the query
        $query = $request->input('queryforexcel');

        // For demonstration, just returning the query
        return response()->json([
            'message' => 'Form submitted successfully!',
            'query' => $query,
        ]);
    }
    public function handleSecSaleAmadeus()
    {
        return view('Home/secSaleAmadeus');
    }
    public function handleConsignmentTracking()
    {
        return view('Home/consignmentTracking');
    }
}
