<?php 
 
namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request; 
 
class HomeController extends Controller 
{ 
  public function index(): View 
  { 
    $viewData = []; 
    $viewData["title"] = "Home Page - Online Store"; 
    return view('home.index')->with("viewData", $viewData); 
  } 
 
  public function about(): View 
  { 
    $viewData = []; 
    $viewData["title"] = "About us - Online Store"; 
    $viewData["subtitle"] =  "About us"; 
    $viewData["description"] =  "This is an about page ..."; 
    $viewData["author"] = "Developed by: Sara Cortes"; 
    return view('home.about')->with("viewData", $viewData); 
 
  } 

  public function contact(): View
  {
    $viewData = [];
    $viewData["email"] = "info@gmail.com";
    $viewData["addess"] = "info@gmail.com";
    $viewData["phoneNumber"] = "+57 123 456 789";
    return view('home.contact')->with("viewData", $viewData);
  }
} 