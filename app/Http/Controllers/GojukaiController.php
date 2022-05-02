<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gojukai;
use App\Exports\GojukaiExportView;
use Maatwebsite\Excel\Facades\Excel;

class GojukaiController extends Controller
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
        $gojukai = Gojukai::latest()->paginate(20);
        return view('Gojukai.index', compact('gojukai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Gojukai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_path = request('a_nic_image')->store('uploads','public');
        $data = $request->all();
        $data['a_nic_image'] = $image_path;
        Gojukai::create($data);

        return redirect('/Gojukai');
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
        $gojukai = Gojukai::find($id);
        return view('Gojukai.edit', compact('gojukai'));
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
        $gojukai = Gojukai::find($id);
        $data = $request->all();
        if($request->hasFile('a_nic_image'))
        {
            $image_path = request('a_nic_image')->store('uploads','public');
            $data['a_nic_image'] = $image_path;
        }
        $gojukai->fill($data)->save();

        return redirect('/Gojukai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gojukai = Gojukai::find($id);
        $gojukai->delete();

        return redirect('/Gojukai');
    }

    public function export()
    {
        return Excel::download(new GojukaiExportView(),'Gojukai.xlsx');
    }
}
