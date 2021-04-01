<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payg_subdomain;

class SubDomainInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:api_admin');
    }
    
    public function index()
    {
        return Payg_subdomain::latest()->paginate(10);
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

        return Payg_subdomain::create([
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
        $subdomain = Payg_subdomain::findOrFail($id);

        $this->validate($request, [
            'desc'  => 'required|string|max:191',
            'price'  => 'required|max:191',
        ]);

        $subdomain->update($request->all());

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
        $user = Payg_subdomain::findOrFail($id);
        $user->delete();
        return ['message' => 'Subdomain Deleted'];
    }
}
