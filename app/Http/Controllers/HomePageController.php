<?php

namespace App\Http\Controllers;
use App\Models\Antrian;
use App\Models\AntrianPpdb;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'NISN' => 'required|unique:antrians',
            'Nama' => 'required',
            'Jalur_Pendaftaran' => 'required',
            'No_Telepon' => 'required',
        ]);

        $antrianTerakhir = Antrian::latest()->value('Nomor_Antrian');

        if ($antrianTerakhir == null) {
            $noAntrian = 1;
        } else {
            $noAntrian = $antrianTerakhir + 1;
        }

        $store = Antrian::create([
            'NISN' => $request->NISN,
            'Nama' => $request->Nama,
            'Jalur_Pendaftaran' => $request->Jalur_Pendaftaran,
            'No_Telepon' => $request->No_Telepon,
            'Nomor_Antrian' => $noAntrian,
        ]);

        return view('success', compact('store'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('display');
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
