<?php

namespace Endroid\QrCode;

require_once('./libs/vendor/autoload.php');
require_once('./libs/vendor/endroid/qrcode/src/ErrorCorrectionLevel.php');

use Endroid\QrCode\QrCode;

$qrcode = new QrCode();
$text = '';
$logoName = '';
$logoPath = null;
$logoSize = 55;
$padding = 15;
$bgClr = array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0);
$clr = array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0);
$errorCorrectionLevel = new ErrorCorrectionLevel(ErrorCorrectionLevel::MEDIUM);


function randomString($length)
{
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randstring = '';
	$strLen = strlen($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$randstring .= $characters[rand(0, $strLen)];
	}
	return $randstring;
}

if (isset($_GET['data']))
	$text = $_GET['data'];
else {
	http_response_code(500);
	exit();
}
if (!isset($_GET['type']) || $_GET['type'] === 'image') {
	header("Content-Type: image/png");
} else {
	header("Content-Type: application/json");
	header("Access-Control-Allow-Origin: *");
}

if (isset($_GET['image'])) {
	$arr = explode('.', $_GET['image']);
	$logoName = randomString(5) . '.' . end($arr);
	$logoPath = './tempImages/' . $logoName;
	if (copy($_GET['image'], $logoPath)) {
		$qrcode->setLogoPath($logoPath);
	}
}

if (isset($_GET['size'])) {
	$size = (int)$_GET['size'];
	$size = $size > 500 || $size < 40 ? 300 : $size;
	$qrcode->setSize($size);
}

if (isset($_GET['logosize'])) {
	$size = (int)$_GET['logosize'];
	$logoSize = $size > 100 || $size < 40 ? 40 : $size;
	header('Cache-Control: ' . $size);
}

if (isset($_GET['padding']))
	$padding = (int)$_GET['padding'];


if (isset($_GET['color'])) {
	$arr = explode(',', $_GET['color']);
	if (count($arr) === 3) {
		$r = (int)$arr[0];
		$g = (int)$arr[1];
		$b = (int)$arr[2];
		$clr = array('r' => $r, 'g' => $g, 'b' => $b, 'a' => 0);
	}
}

if (isset($_GET['bgcolor'])) {
	$arr = explode(',', $_GET['bgcolor']);
	if (count($arr) === 3) {
		$r = (int)$arr[0];
		$g = (int)$arr[1];
		$b = (int)$arr[2];
		$bgClr = array('r' => $r, 'g' => $g, 'b' => $b, 'a' => 0);
	}
}
if (isset($_GET['errorcorrection'])) {
	$number = (int)$_GET['errorcorrection'];
	if ($number === 1) $errorCorrectionLevel = new ErrorCorrectionLevel(ErrorCorrectionLevel::LOW);
	if ($number === 2) $errorCorrectionLevel = new ErrorCorrectionLevel(ErrorCorrectionLevel::MEDIUM);
	if ($number === 3) $errorCorrectionLevel = new ErrorCorrectionLevel(ErrorCorrectionLevel::QUARTILE);
	if ($number === 4) $errorCorrectionLevel = new ErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
}

if (isset($_GET['label']))  $qrcode->setLabel($_GET['label']);

$qrcode->setLogoWidth($logoSize);
$qrcode->setText($text);
$qrcode->setMargin($padding);
$qrcode->setForegroundColor($clr);
$qrcode->setBackgroundColor($bgClr);
$qrcode->setErrorCorrectionLevel($errorCorrectionLevel);

if (!isset($_GET['type']) || $_GET['type'] === 'image') {
	echo $qrcode->writeString();
} else {
	$filePath = './tempImages/' . randomString(8) . '.png';
	$qrcode->writeFile($filePath);
	$fileType = pathinfo($filePath, PATHINFO_EXTENSION);
	$fileData = file_get_contents($filePath);
	$base64 = 'data:image/' . $fileType . ';base64,' . base64_encode($fileData);
	echo json_encode(['status' => true, 'imageData' => $base64]);
	@unlink($filePath);
}

// Check if the request has an logo. If then delete the file.
if ($logoPath) {
	@unlink($logoPath);
}
