<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = \App\Employee::with(['job', 'office', 'bonus'])->paginate();
        return view('employees/index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('employees/create');
    // }

    public function create()
    {
        $jobs = \App\Job::all();
        $bonuses = \App\Bonus::all();
        $offices = \App\Office::all();
       
        return view('employees/create', ['jobs' => $jobs, 'bonuses' => $bonuses, 'offices' => $offices]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'employee_oib' => 'required|max:11',
            'employee_name' => 'required',
            'employee_surename' => 'required',
            'employee_email' => 'required'
        ]);
    
        if ($validator->fails()) {
            return redirect()->action('EmployeeController@create')
                ->withErrors($validator);
        }
    
    
        $data = $request->input();
        \App\Employee::create($data);
        return redirect()->action('EmployeeController@index');
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
        \App\Employee::destroy($id);
        return redirect()->action('EmployeeController@index');
    }
}
