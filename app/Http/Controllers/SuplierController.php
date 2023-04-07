<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('suplier.index');
    }

    public function data()
    {
        $suplier = Suplier::orderBy('id_suplier', 'desc')->get();

        return DataTables()
            ->of($suplier)
            ->addIndexColumn()
            ->addColumn('aksi', function ($suplier) {
                return '
                <div class="btn-group">
                    <button type="button" onclick="editForm(`' . route('suplier.update', $suplier->id_suplier) . '`)" class="btn btn-xs btn-info"><i class="fa fa-pen"></i></button>
                    <button type="button" onclick="deleteData(`' . route('suplier.destroy', $suplier->id_suplier) . '`)" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>
                </div>
                ';
            })
            ->rawColumns(['aksi'])
            ->make(true);
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
        Suplier::create($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $suplier = Suplier::find($id);

        return response()->json($suplier);
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
    public function update(Request $request, $id)
    {
        $suplier = Suplier::find($id);
        $suplier->update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();

        return response(null, 204);
    }
}
