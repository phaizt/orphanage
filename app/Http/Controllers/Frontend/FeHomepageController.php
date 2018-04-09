<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeHomepageController extends Controller
{
	private $active = ['homepage_menu' => 'menu_active'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$active = $this->active;
        return view('frontend.homepage',compact('active'));
    }
}
