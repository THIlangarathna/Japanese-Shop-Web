<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tozan;
use App\Exports\TozanExportView;
use Maatwebsite\Excel\Facades\Excel;

class TozanController extends Controller
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
        $tozan = Tozan::latest()->paginate(20);
        return view('Tozan.index', compact('tozan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tozan.create');
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
        Tozan::create($data);

        return redirect('/Tozan');
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
        $tozan = Tozan::find($id);
        return view('Tozan.edit', compact('tozan'));
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
        $tozan = Tozan::find($id);
        $data = $request->all();
        $tozan->fill($data)->save();

        return redirect('/Tozan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tozan = Tozan::find($id);
        $tozan->delete();

        return redirect('/Tozan');
    }

    public function export()
    {
        return Excel::download(new TozanExportView(),'Tozan.xlsx');
    }
}
