<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\PendaftaranLomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LombaController extends Controller
{
    public function index()
    {
        $lombas = Lomba::all();
        return view('lomba.index', compact('lombas'));
    }

    public function daftar($id)
    {
        $user = Auth::user();

        $exists = PendaftaranLomba::where('user_id', $user->id)->where('lomba_id', $id)->exists();
        if ($exists) {
            return redirect()->back()->with('error', 'Kamu sudah mendaftar LOMBA ini.');
        }

        PendaftaranLomba::create([
            'user_id' => $user->id,
            'lomba_id' => $id
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }

    public function riwayat()
    {
        $riwayat = \App\Models\PendaftaranLomba::where('user_id', Auth::id())->with('lomba')->get();
        return view('lomba.riwayat', compact('riwayat'));
    }
}
