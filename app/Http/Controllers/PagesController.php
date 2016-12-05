<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		$posts= Post::orderBy('created_at')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getAbout(){
		$first='o';
		$last='gl4jo3';

		$fullname=$first . " " . $last;
		$email='ogl4jo3@gmail.com';
		$data=[];
		$data['email']=$email;
		$data['fullname']=$fullname;
		
		return view('pages.about')->withData($data);
	}
	public function getContact(){
		return view('pages.contact');
	}

}