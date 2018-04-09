<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeMissionController extends Controller
{
	private $active = ['mission_menu' => 'menu_active'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$active = $this->active;
        return view('frontend.mission',compact('active'));
    }
}
