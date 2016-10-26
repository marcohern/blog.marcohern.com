<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Lib\Image;

class ImagesController extends Controller {

	private $p = [
		'ldpi'    => [
			'cover' => [1300,650],
			'index' => [700,700]
		],
		'mdpi'    => [
			'cover' => [1300,650],
			'index' => [700,700]
		],
		'hdpi'    => [
			'cover' => [1300,650],
			'index' => [700,700]
		],
		'xhdpi'   => [
			'cover' => [1300,650],
			'index' => [700,700]
		],
		'xxhdpi'  => [
			'cover' => [1300,650],
			'index' => [700,700]
		],
		'desktop' => [
			'cover' => [1300,650],
			'index' => [700,700]
		]
	];

	private function getSize($density, $profile, $name) {
		if (array_key_exists($density, $this->p)) {
			if (array_key_exists($profile, $this->p[$density])) {
				return $this->p[$density][$profile];
			}
		}
		return false;
	}

	private function createSubImage($density, $profile, $name) {
		$size = $this->getSize($density, $profile, $name);
		if ($size) {
			$w = $size[0];
			$h = $size[1];
			$image = DB::table('images')
			->select('width','height','type','image')
			->where([
				['name',$name],
				['density','original'],
				['profile','original']
			])
			->first();
			if ($image) {
				$m = Image::fromStream($image->image, $image->width, $image->height);
				$m->scaleCenterCrop($w, $h);
				$jpg = $m->getJpegStream();

				DB::table('images')->insert([
					'name' => $name,
					'density' => $density,
					'profile' => $profile,
					'type' => 'image/jpg',
					'width' => $w,
					'height' => $h,
					'image' => $jpg,
					'created_at' => date("Y-m-d H:i:s")
				]);
				return true;
			}
			return false;
		}
		return false;
	}

	public function display($density, $profile, $name) {
		$image = DB::table('images')
			->select('width','height','type','image')
			->where([
				['name','=',$name],
				['density','=',$density],
				['profile','=',$profile]
			])
			->first();
		if ($image) {
			return response($image->image)
				->header('Content-Type', $image->type);
		} else {
			if ($this->createSubImage($density, $profile, $name)) {
				$image = DB::table('images')
					->select('width','height','type','image')
					->where([
						['name','=',$name],
						['density','=',$density],
						['profile','=',$profile]
					])
					->first();
				return response($image->image)
					->header('Content-Type', $image->type);
			}
		}
		abort(404, "Image not found");
		return false;
	}
}