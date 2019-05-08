<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Dns\Dns;

class DnsController extends Controller
{
    public function getSiteDnsInfo(Request $request) {
	$input = $request->all();
	if(isset($input['site'])) {
		$dns = new Dns($input['site']);
		
		$r = $dns->getRecords(['TXT']);
		echo '<pre>'; print_r($r); die;	
	} else {
		echo 'sdfs'; die;	
	}
    }
}
