<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  
  public function contact(){
    return view('pages.contact',['name'=>'Gashaw Taye',
    'role'=>'Web Developer',
    'company'=>'Ministry of Defence',
    'quote'=>'ponder']);
  }
  
  public function employees(){
    return view('pages.employees',
    [
        'employee1'=>['Gashaw Taye','Web Developer','Ministry of Defence','ponder'],
        'employee2'=>['Abebe Kebede','Web Developer','Ministry of Defence','ponder'],
        'employee3'=>['Alemu Desta','Web Developer','Ministry of Defence','ponder']
    ]);
  }
  public function employee_list(){
    return view('pages.employee_list')
    
       ->with('employee1',['Gashaw Taye','Web Developer','Ministry of Defence','ponder'])
       ->with('employee2',['Abebe Kebede','Web Developer','Ministry of Defence','ponder'])
       ->with('employee3',['Alemu Desta','Web Developer','Ministry of Defence','ponder']);
   
  }

  public function employee_about(){
    $name ='Gashaw Taye';
    $role ='Web Developer';
    $company ='Ministry of Defence';
    $quote ='ponder';
    return view('pages.employee_about',compact('name','role','company','quote'));
   
    
  }

  public function contact1(){
    return view('pages.contact1',['name'=>'Gashaw Taye',   
    'role' =>'Web Developer',
    'company' =>'Ministry of Defence',
    'quote' =>'ponder']);
  }
    //
}
