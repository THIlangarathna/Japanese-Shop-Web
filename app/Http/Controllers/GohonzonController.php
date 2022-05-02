<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gohonzon;
use App\Exports\GohonzonExportView;
use Maatwebsite\Excel\Facades\Excel;

class GohonzonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gohonzon = Gohonzon::latest()->paginate(20);
        return view('Gohonzon.index', compact('gohonzon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Gohonzon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Gohonzon::create($data);

        return redirect('/Gohonzon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gohonzon = Gohonzon::find($id);
        return view('Gohonzon.edit', compact('gohonzon'));
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
        $gohonzon = Gohonzon::find($id);
        $data = $request->all();
        $gohonzon->fill($data)->save();

        return redirect('/Gohonzon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gohonzon = Gohonzon::find($id);
        $gohonzon->delete();

        return redirect('/Gohonzon');
    }

    public function export()
    {
        return Excel::download(new GohonzonExportView(),'Gohonzon.xlsx');
    }
}
