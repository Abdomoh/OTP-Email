<?php

namespace App\Http\Controllers\OTP;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class OtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Otp.verify');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        if ($request->input('code') == $user->code) {
            $user->restCode();
            return to_route('dashboard');
        }
        return redirect()->back()->withErrors(['code' => 'رمز التحقق غير صحيح']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
