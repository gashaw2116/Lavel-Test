<?php

namespace App\Http\Controllers;

use App\Models\employess;
use App\Models\report;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return "Hello everyone";
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return "The Id Number is :".$id;
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
public function employee_report(){
    $report1=new report(['name'=>'report one']);
    $report1->save();
    $report2=new report(['name'=>'report two']);
    $report2->save();
    $report3=new report(['name'=>'report three']);
    $report3->save();
    $empoyee1= new employess(['title'=>'emploee one title ','body'=>'employee one body']);
    $empoyee1->save();
    $empoyee2= new employess(['title'=>'emploee two title ','body'=>'employee two body']);
    $empoyee2->save();
    $empoyee3= new employess(['title'=>'emploee three title ','body'=>'employee three body']);
    $empoyee3->save();
    $empoyee1->reports()->attach([$report1->id, $report2->id]);
    $empoyee2->reports()->attach([$report2->id, $report3->id]);
    $empoyee3->reports()->attach([$report3->id, $report1->id]);

    return response()->json(['employee1'=>$empoyee1,'employee2'=>$empoyee2, 'employee3'=>$empoyee3]);
}

public function with_reprts($id){
    $empoyee= employess::with('reports')->findfind($id);
    return $empoyee;
}

public function with_employess($id){
    $report= report::with('employees')->find($id);
    return $report;
}

}
