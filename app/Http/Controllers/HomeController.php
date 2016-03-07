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
                                            FROM student_courseenrollment s LEFT JOIN course_name c ON s.course_id = c.course_id
                                            where is_active = 1 Group by s.course_id, course_name;'));
            
        #$activos = DB::select(DB::raw('SELECT * FROM course_name WHERE CURDATE() <= fin AND CURDATE() >= inicio'));
        #$no_activos = DB::select(DB::raw('SELECT * FROM course_name WHERE CURDATE() < inicio'));
        #$concluido = DB::select(DB::raw('SELECT * FROM course_name WHERE CURDATE() > fin'));
        
        #print_r($inscritos[0]);
        #print_r($inscritos);
        #print_r($activos);
        #print_r($concluido);
        #print_r($no_activos);
        #$act = $activos[0] -> total;
        #$no_act = $no_activos[0] -> total;
        
        #$course = array($act, $no_act);
        
            return view('home')->with ('inscritos', collect($inscritos));
	}
    
    public function cursos(){
        HomeController::cursoa();
        HomeController::curson();
        HomeController::cursoc();
        #HomeController::index();
        
        return view('cursos');
    }
    
    public function cursoa(){
        
        $activos = DB::select(DB::raw('SELECT * FROM course_name WHERE CURDATE() <= fin AND CURDATE() >= inicio'));
        
        #print_r($activos);

        return view('cursoa') -> with ('activos', collect($activos));
        
    }
    public function curson(){

        $no_activos = DB::select(DB::raw('SELECT * FROM course_name WHERE CURDATE() < inicio'));
        
        #print_r($no_activos);
        
        return view('curson') -> with ('no_activos', collect($no_activos));
        
    }
    
    public function cursoc(){
        
        $concluido = DB::select(DB::raw('SELECT * FROM course_name WHERE CURDATE() > fin'));
        
        #print_r($concluido);

        return view('cursoc') -> with ('concluido', collect($concluido));
        
    }
        

}
