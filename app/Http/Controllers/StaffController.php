<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $data=Staff::all(); 
        return  view ('staffs.staffindex',['staffinfos'=>$data]);
    }

    public function detail($id)
    {
        return " Controller - Staff Detail Info";
    }
}
