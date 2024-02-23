<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicle.index', compact('vehicles'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required',
        'color' => 'required',
        'machine' => 'required',
        'price' => 'required',
        'tire_wheel'=>'required',
    ]);

    // Attempt to create a new vehicle instance and save it to the database
    $vehicle = Vehicle::create([
        'name' => $request->name,
        'color' => $request->color,
        'machine' => $request->machine,
        'price' => $request->price,
        'tire_wheel' => $request->tire_wheel
    ]);

    // Check if the vehicle was successfully created and saved
    if ($vehicle) {
        // If successful, redirect to the index page with success message
        return redirect()->route('vehicle.index')->with(['success' => 'Data berhasil disimpan']);
    } else {
        // If creation fails, redirect back to the create page with error message
        return redirect()->route('vehicle.create')->with(['error' => 'Data gagal disimpan']);
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicles = vehicle::findOrFail($id);
        return view('vehicle.show', compact('vehicles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicles = vehicle::findOrFail($id);
        return view('vehicle.edit', compact('vehicles'));
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
            //validate
            $this->validate($request, ['name' => 'required']);
            //get data by id
            $category = vehicle::findOrFail($id);
            //update data
            $category->update([
                'name'=> $request->name,
                'color'=>$request->color,
                'machine'=>$request->machine,
                'price'=>$request->price
            ]);
     
            return redirect()->route('vehicle.index')
                    ->with(['succes' => 'data keupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = vehicle::findOrFail($id);
        $category->delete();
        return redirect()->route('vehicle.index')
        ->with(['succes' => 'data kehapus']);
    }
}
