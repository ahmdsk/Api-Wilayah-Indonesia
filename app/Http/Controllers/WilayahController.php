<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function provinsi(){
        $provinsi = DB::table('provinces')->get();

        return response()->json([
            'provinsi'  => $provinsi
        ]);
    }

    public function kota($id_provinsi = null){
        if($id_provinsi != null){
            $kota = DB::table('cities')->where('prov_id', $id_provinsi)->get();

            return response()->json([
                'kota'  => $kota
            ]);
        } else {
            $semua_kota = DB::table('cities')->get();

            return response()->json([
                'kota'  => $semua_kota
            ]);
        }
    }

    public function kecamatan($id_kota = null){
        if($id_kota != null){
            $kecamatan = DB::table('districts')->where('city_id', $id_kota)->get();

            return response()->json([
                'kecamatan'  => $kecamatan
            ]);
        } else {
            $semua_kecamatan = DB::table('districts')->get();

            return response()->json([
                'kecamatan'  => $semua_kecamatan
            ]);
        }
    }

    public function kelurahan($id_kecamatan = null){
        if($id_kecamatan != null){
            $kelurahan = DB::table('subdistricts')->where('dis_id', $id_kecamatan)->get();

            return response()->json([
                'kelurahan'  => $kelurahan
            ]);
        } else {
            $semua_kelurahan = DB::table('subdistricts')->get();

            return response()->json([
                'kelurahan'  => $semua_kelurahan
            ]);
        }
    }
}