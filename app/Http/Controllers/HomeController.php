<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    /*public function about(){
      $title ='About Us -Online Store';
      $subtitle ='About Us Page';
      $description ='This is an About Page';
      $author ='Developed By : Gashaw Taye';
    return view('home.about')->with('title',$title)
        ->with('subtitle',$subtitle)
        ->with('description',$description)
        ->with('author',$author);
      }*/
/*function index(){
  $title ='Home -Online Store';
  $subtitle ='Major categories in our shop';
  $imageUrls=['https://placehold.co/350',
  'https://placehold.co/350',
  'https://placehold.co/350'];
  return view('home.index')->with('title',$title)
  ->with('subtitle',$subtitle)
        ->with('imageUrls',$imageUrls);
}
*/
public function index()
   {
      $viewData = [];

      $viewData["title"] = "Home Page - Online Store";

       return view('home.index')->with("viewData", $viewData);
   }
  
   public function about()


   {


       $viewData = [];


       $viewData["title"] = "About us - Online Store";


       $viewData["subtitle"] = "About us";


       $viewData["description"] = "This is an about page ...";


       $viewData["author"] = "Developed by: Gashaw Taye";
      
       return view('home.about')->with("viewData", $viewData);




   }



}
