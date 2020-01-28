<?php

namespace App\Http\Controllers;

use App\Department;
use App\Station;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::getallforselect();
        $departments = Department::all();
        $p="something";
        return view('departments.index',compact('stations','departments','p'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stations = Station::getallforselect();
        $p="something";
        return view('departments.create',compact('stations','p'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        
$this->validate($req, [
            
    'title'=>'required',
    'type'=>'required',
    'station'=>'required'
]);

//$arrInput = $req->only('title','type','station');

$datasave = new Department;

//print_r($datasave);
if(!empty($req->isactive)){
   // $arrInput['is_active']='1';
    $datasave->is_active ='1';
   
        }
else {
   // $arrInput['is_active']='0';
    $datasave->is_active ='0';
   
    }
    //$arrInput['department_type']=$req->type;
    //$arrInput['title']=$req->title;
    //$arrInput['station']=$req->station;
      //  dd($arrInput);



    //$department=Department::create($arrInput);
    $datasave->station_id = $req->station;
     $datasave->type = $req->type;
     $datasave->title = $req->title;
     $datasave->save();
     $p="something";
    return redirect()->route('departments.index')
    ->with('flash_message',
     'Page successfully added.', 'p');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stations = Station::getallforselect();
        $departments = Department::findOrFail($id);
        $p='something';
        return view('departments.edit',compact('stations','departments','p'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $this->validate($req, [
            
            'title'=>'required',
            'type'=>'required',
            'station'=>'required'
        ]);
        $datasave = Department::findOrFail($id);
            

if(!empty($req->isactive)){

    $datasave->is_active ='1';
   
        }
else {

    $datasave->is_active ='0';
   
    }
    $datasave->station_id = $req->station;
     $datasave->type = $req->type;
     $datasave->title = $req->title;
     $datasave->save();
     $p="something";
    return redirect()->route('departments.index')
    ->with('flash_message',
     'Page successfully Edited.','p');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
        $p="something";
        //page_log::log_Entry($id,'Deleted') ;

        return redirect()->route('departments.index')
            ->with('flash_message',
             'Page successfully deleted','p');
    
    }
}
