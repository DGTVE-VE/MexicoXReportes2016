<?php 

namespace App\Http\Controllers;

use DB;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
            $inscritos = DB::select (DB::raw('SELECT  count(*) inscritos, s.course_id, course_name
                                            FROM student_courseenrollment s 
                                            LEFT JOIN course_name c ON s.course_id = c.course_id
                                            where is_active = 1 
                                            Group by s.course_id, course_name;'));
            return view('home')->with ('inscritos', collect($inscritos));
	}
        
        

}
