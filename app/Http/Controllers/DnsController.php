<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DnsController extends Controller
{
    public function getSiteDnsInfo(Request $request) {
	$input = $request->all();
	if(isset($input['site'])) {
		

		$r = dns_get_record($input['site'], DNS_ALL);

		echo '<pre>'; print_r($r); die;	
	} else {
		echo 'sdfs'; die;	
	}
    }
}
