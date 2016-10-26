<?php

namespace App\Lib;

define("IMAGE_QUALITY_JPEG", 90);
define("IMAGE_QUALITY_PNG", 9);

class Image {
	private $width;
	private $height;
	private $gd;
	private $logpath;

	public static function saveToFileAndGetSizeAndContent($stream) {
		$tmpname = tempnam(sys_get_temp_dir(), 'img');
		file_put_contents($tmpname, $stream);
		$size = getimagesize($tmpname);
		$w = $size[0];
		$h = $size[1];
		$content = file_get_contents($tmpname);
		unlink($tmpname);

		return [
			'w' => $w,
			'h' => $h,
			'c' => $content
		];
	}

	public static function fromFile($uri) {
		$size = getimagesize($uri);
		$gdimage = imagecreatefromstring(file_get_contents($uri));
		$image = new Image($size[0], $size[1]);
		return $image->import($gdimage, $size[0], $size[1]);
	}

	public static function fromStream($stream, $w, $h) {
		$gdimage = imagecreatefromstring($stream);
		$image = new Image($w, $h);
		return $image->import($gdimage, $w, $h);
	}

	public static function fromDbStream($stream) {
		$r = self::saveToFileAndGetSizeAndContent($stream);

		$gdimage = imagecreatefromstring($r['c']);
		$image = new Image($r['w'], $r['h']);
		return $image->import($gdimage, $r['w'], $r['h']);
	}

	public function getWidth() { return $this->width; }
	public function getHeight() { return $this->height; }

	private function __construct($w, $h) {
		$this->width = $w;
		$this->height = $h;
		$this->gd = imagecreatetruecolor($this->width, $this->height);

		$this->logpath = "/image.log";
	}

	private function import($gd, $sw, $sh) {
		imagecopy($this->gd, $gd, 0, 0, 0, 0, $sw, $sh);
		return $this;
	}

	private function log($str) {
		$f = fopen($this->logpath, "a");
		fwrite($f, $str."\n");
		fclose($f);
	}

	private function overwrite($gd, $w, $h) {
		imagedestroy($this->gd);
		$this->width = $w;
		$this->height = $h;
		$this->gd = $gd;
		return $this;
	}

	private function createCanvas($w, $h) {
		$newImage = imagecreatetruecolor($w, $h);
		return $newImage;
	}

	public function scale($value = 1.0) {
		$newW = $this->width * $value;
		$newH = $this->height * $value;
		$newImage = $this->createCanvas($newW, $newH);
		imagecopyresampled($newImage, $this->gd, 0, 0, 0, 0, $newW, $newH, $this->width, $this->height);

		return $this->overwrite($newImage, $newW, $newH);
	}

	public function crop($top, $left, $bottom, $right) {
		$newW = $this->width- $left - $right;
		$newH = $this->height- $top - $bottom;
		$newImage = $this->createCanvas($newW, $newH);
		imagecopy($newImage, $this->gd, 0, 0, $left, $top, $newW, $newH);

		return $this->overwrite($newImage, $newW, $newH);
	}

	public function centerCrop($w, $h) {
		$x = $this->width/2 - $w/2;
		$y = $this->height/2 - $h/2;

		$newImage = $this->createCanvas($w, $h);
		imagecopy($newImage, $this->gd, 0, 0, $x, $y, $w, $h);

		return $this->overwrite($newImage, $w, $h);
	}

	public function scaleCenterCrop($w, $h) {
		$nw = 0+$w;
		$nh = 0+$h;
		$s = $this->getBestScale($nw, $nh);
		$nw = $w/$s;
		$nh = $h/$s;
		return $this->centerCrop($nw, $nh)->scaleDown($s);
	}

	public function scaleDown($s) {
		if ($s > 1) return $this;
		else return $this->scale($s);
	}

	public function exportJpeg() {
		header("Content-type: image/jpeg");
		imagejpeg($this->gd, null, IMAGE_QUALITY_JPEG);
	}

	public function exportPng() {
		header("Content-type: image/png");
		imagepng($this->gd, null, IMAGE_QUALITY_PNG);
	}

	public function getBestScale($w, $h) {
		$wf = $w/$this->width;
		$hf = $h/$this->height;
		return max($wf, $hf);
	}

	public function getJpeg() {
		ob_start();
		imagejpeg($this->gd, null, IMAGE_QUALITY_JPEG);
		$jpeg = ob_get_clean();
		return $jpeg; 
	}
	public function getJpegStream() {
		$tmpname = tempnam(sys_get_temp_dir(), 'img');
		imagejpeg($this->gd, $tmpname, IMAGE_QUALITY_JPEG);
		$content = file_get_contents($tmpname);
		unlink($tmpname);
		return $content;
	}

	public function getPng() {
		ob_start();
		imagepng($this->gd, null, IMAGE_QUALITY_PNG);
		$png = ob_get_clean();
		return $png;
	}

	public function getPngStream() {
		$tmpname = tempnam(sys_get_temp_dir(), 'img');
		imagepng($this->gd, $tmpname, IMAGE_QUALITY_PNG);
		$content = file_get_contents($tmpname);
		unlink($tmpname);
		return $content;
	}

	public function destroy() {
		imagedestroy($this->gd);
	}
}