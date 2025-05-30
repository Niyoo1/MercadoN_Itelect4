<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use Response;
use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {   
        $employees = employee::get();

        return view ('employee.index');
    }

    public function index(){
        employee::create($request->all());
        return view ('employee.create');

    }

    public function index(Request $request){
        employee::index($request ());
        return view('Employee.create');
        {

            'fname = fname[255]string';
            'lastname = lname[255]string';
            'middlename = midname[255]string';
            'age = age[255]integer';
            'address= address[255]string';
            'zip = zip[255]integer';
        }

    }
    // employee::create($request->all());
    // return view ('employee.create');
    // }


        
            // employee::findOrFail($id)->update($request->all());
            // return redirect ()->back()->with('status','Employee Updated Successfully!');
            // }

}
