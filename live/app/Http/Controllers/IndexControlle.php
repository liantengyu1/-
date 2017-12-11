<?php
/**
 * 后台首页控制器
 * 
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexControlle extends Controller
{
    
	public function index(){
		return view('index/index');
	}

}
