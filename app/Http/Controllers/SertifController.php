<?php

namespace App\Http\Controllers;

use App\Models\Sertif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SertifController extends Controller
{
    public function index()
    {
        $sertif = Sertif::where('kode_user', Auth::user()->id)->get();
        return view('Sertif.index', compact('sertif'));
    }

    public function simpan_sertif(Request $request)
    {
        $fileName = $request->nama . random_int(1, 3) . '.' . $request->sertif->extension();
        $request->sertif->move(public_path('sertif-file/' . Auth::user()->name), $fileName);

        $data = new Sertif();
        $data->kode_user = Auth::user()->id;
        $data->nama_file = $request->nama;
        $data->lokasi_file = $fileName;
        $data->save();

        return redirect(route('sertif_index'));
    }

    public function hapus_sertif(Request $request)
    {
        $data = Sertif::where('id', $request->id);
        $data->delete();

        return redirect(route('sertif_index'));
    }
}
