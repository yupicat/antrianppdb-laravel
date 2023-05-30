<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Antrian::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('datas'));
        
        
    }

    public function loket1()
    {
        $datas = Antrian::orderBy('created_at', 'desc')
        ->where('Jalur_Pendaftaran', 'Zonasi')
        ->get();
        return view('loket1', compact('datas'));
    }

    public function loket2()
    {
        $datas = Antrian::orderBy('created_at', 'desc')
        ->where('Jalur_Pendaftaran', 'Prestasi')
        ->get();
        return view('loket2', compact('datas'));
    }

    public function loket3()
    {
        $datas = Antrian::orderBy('created_at', 'desc')
        ->where('Jalur_Pendaftaran', 'Afirmasi')
        ->get();
        return view('loket3', compact('datas'));
    }

    public function loket4()
    {
        $datas = Antrian::orderBy('created_at', 'desc')
        ->where('Jalur_Pendaftaran', 'Perpindahan Orang Tua')
        ->get();
        return view('loket4', compact('datas'));
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
        //
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
    public function destroy($id)
    {
        $deleted = DB::table('antrians')
            ->where('id', $id)
            ->delete();

        if ($deleted) {
            return back()->with('success', 'Data berhasil dihapus');
        } else {
            return back()->with('error', 'Gagal menghapus data');
        }
    }
}
