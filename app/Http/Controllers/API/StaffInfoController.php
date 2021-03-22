<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payg_staff;

class StaffInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Payg_staff::latest()->paginate(10);
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
            'desc'  => 'required|string|max:191',
            'price'  => 'required|max:191',
            
        ]);

        return Payg_staff::create([
            'desc' => $request['desc'],
            'price' => $request['price']
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
        $staff = Payg_staff::findOrFail($id);

        $this->validate($request, [
            'desc'  => 'required|string|max:191',
            'price'  => 'required|max:191',
        ]);

        $staff->update($request->all());

        return['message' => 'updating'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Payg_staff::findOrFail($id);
        $user->delete();
        return ['message' => 'Student Deleted'];
    }
}
