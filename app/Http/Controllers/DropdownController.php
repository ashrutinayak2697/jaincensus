<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DropdownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = DB::table("country")->pluck("country_name","country_id");

            return view('jaincount_user.jaincount',compact('countries'));

        
    }
    public function getStateList(Request $request)
        {
            $states = DB::table("state")
            ->where("country_id",$request->country_id)
            ->pluck("state_name","state_id");
            return response()->json($states);
        }
 public function countrycode()
    {
       $mobilecode=DB::table('countrycode')->pluck('country_code_id','country_name','country_code');
          return view('jaincount_user.jaincount',compact('mobilecode'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $countries = DB::table("country")->pluck("country_name","country_id");
            return view('jaincount_user.editdetails',compact('countries'));

        
    }
    public function getStateList1(Request $request)
        {
            $states = DB::table("state")
            ->where("country_id",$request->country_id)
            ->pluck("state_name","state_id");
            return response()->json($states);
        }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    //    $mobilecode=DB::table('countrycode')->pluck('country_code_id','country_name','country_code');
    //       return view('jaincount_user.jaincount',compact('mobilecode'));
    // }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
