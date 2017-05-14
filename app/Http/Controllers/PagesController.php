<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Face;



class PagesController extends Controller{  


		public function getindex(){

	          $faces=Face::orderBy('created_at','desc')->limit(1)->get();
	          return view ('pages.home')->withFaces($faces);

	          
		} 

		public function getAbout (){
               
               
	          return view('pages.about');

		}

		

		public function getContact (){

	          return view ('pages/contact');

		}

		




}
