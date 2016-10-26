<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class HomeController extends Controller {
	public function select_language() {
		return view('abstract_index');
	}

	public function index() {
		$locale = LaravelLocalization::getCurrentLocale();
		$posts = DB::table('posts')
			->select('*')
			->where('lang', $locale)
			->get();
		return view('abstract_index',['posts' => $posts]);
	}

	public function post($post) {
		$post = DB::table('posts')
			->select('*')
			->where('uslug',$post)->first();

		return view('abstract_post',['post' => $post]);
	}

	public function about() {
		return view('abstract_about');
	}

	public function contact() {
		return view('abstract_contact');
	}
}