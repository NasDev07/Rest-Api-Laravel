<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // SELECT * FROM karyawans JOIN jabatans ON karyawans.id = jabatans.id;
        // $data = DB::table('keryawans')
        // ->leftJoin('jabatan', '=', 'karyawans.id', 'jabatans.id')
        // ->select('karyawans.*', 'jabatan.*', 'karyawans.id', 'jabatasn.id')
        // ->get();

        // return response()->json([
        //     'error' => false,
        //     'message' => 'Success',
        //     'data' => $data
        // ]);

        // Karyawan model
        $data = Karyawan::all();
        return response()->json([
            'error' => false,
            'message' => 'Success',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // create karyawan
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create store karyawan
        $request->validate([
            "nama" => "required",
            "jenis_kelamin" => "required",
            "nip" => "required",
            "status" => "required",
            "alamat" => "required"
        ]);
        $data = Karyawan::create($request->all());
        return response()->json([
            'error' => false,
            'message' => 'Data berhasil ditambahkan',
            'data' => $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show karyawan by id
        $data = Karyawan::find($id);
        return response()->json([
            'error' => false,
            'message' => 'Success',
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update karyawan
        $data = Karyawan::findOrFail($id);
        $request->validate([
            "nama" => "required",
            "jenis_kelamin" => "required",
            "nip" => "required",
            "status" => "required",
            "alamat" => "required"
        ]);
        $data->update($request->all());
        return response()->json([
            'error' => false,
            'message' => 'Data berhasil diupdate',
            'data' => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete karyawan
        $data = Karyawan::findOrFail($id);
        $data->delete();
        return response()->json([
            'error' => false,
            'message' => 'Data berhasil dihapus',
            'data' => $data
        ]);
    }
}
