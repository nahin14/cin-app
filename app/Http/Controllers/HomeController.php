<?php namespace App\Http\Controllers;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class HomeController extends Controller {

    /**
     * Check for authorization
     */
    public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Return view home
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}



}
