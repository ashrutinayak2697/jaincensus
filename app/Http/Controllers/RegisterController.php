<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Contact;
use Input;
use DB;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {

        
        // dd($req);
         $rules = array(
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'comment' => 'required'
        );
         $validator = Validator::make($req->all(), $rules);
         
         if ($validator->fails()) 
         {
            $data=$validator->errors()->all();
            return view('jaincount_user/feedback') ;
        }
        else 
        {
            $user=new Feedback();
            $user->name=$req->name;
            $user->address=$req->address;
            $user->email= $req->email;
            $user->contact= $req->contact;
            $user->comment=$req->comment;
            $user->save();
            return view('jaincount_user/index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jaincount_user/feedback');
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function contact()
        {
            return view('jaincount_user/contact');
        }
        public function contactadd(Request $req)
        {
             $rules = array(
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'mobile' => 'required'
        );
         $validator = Validator::make($req->all(), $rules);
         
         if ($validator->fails()) 
         {
            $data=$validator->errors()->all();
            return view('jaincount_user/contact') ;
        }
        else 
        {
            $user=new Contact();
            $user->name=$req->name;
            $user->address=$req->address;
            $user->email= $req->email;
            $user->contact= $req->mobile;
            $user->save();
            return view('jaincount_user/index');
        }
        }
    
}
