<?php
function tgl($tanggal){
	$segment = explode('-', $tanggal);
	return "{$segment[2]}-{$segment[1]}-{$segment[0]}";
}
function hp($nomor){
	return str_replace(array('-','_'), '', $nomor);
}
function getAge($tgl_lahir){
	return date_diff(date_create($tgl_lahir), date_create('today'))->y;
}
function b2m($data){
	if(empty($data))
		$data = '-';
	return $data;
}
function up($word){
	return strtoupper(trim($word));
}
function toMoney($number, $rp = false){
	$money = number_format($number,0,',','.');
	if($rp)
		$money = "Rp ".$money;
	return $money;
}
function dayDiff($now = NULL){
	$last = date("Y-m-d");
	// Declare timestamps
	if(!$now)
		$now = date( 'Y-m-d', time());
	$dlast = new DateTime( $last );
	$dnow = new DateTime( $now );
	// Find difference
	$interval = $dlast->diff($dnow);
	// Get the days format
	$days = (int) $interval->format('%a');
	if($now < $last)
		$days *= -1;
	return $days;
}