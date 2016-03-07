<?php 

namespace App\Http\Controllers;

use DB;

class UseController extends Controller {


	public function __construct()
	{
        
	}
    public function index()
    {
        return view('menu');
    }

	public function index1()
	{
        $inscritos = DB::select (DB::raw('SELECT  count(*) inscritos, s.course_id, course_name
                                            FROM student_courseenrollment s 
                                            LEFT JOIN course_name c ON s.course_id = c.course_id
                                            where is_active = 1 
                                            Group by s.course_id, course_name;'));
           
        $totales = DB::select ('SELECT count(id) FROM auth_user;');
        
        return view('home1') -> with ('inscritos', collect($inscritos));
	}
    
    public function totales()
	{
            
        $totales = DB::select(DB::raw('SELECT count(id) as total FROM auth_user;'));
        $no_activos = DB::select (DB::raw('SELECT count(id) as total FROM auth_user where is_active = 0;'));
        $activos = DB::select (DB::raw('SELECT count(id) as total FROM auth_user where is_active = 1;'));
        
        $t = $totales[0] -> total;
        $n = $no_activos[0] -> total;
        $a = $activos[0] -> total;
        
        $info = array($t, $n, $a); 
            
        #print_r($t =$totales[0] -> total);
        #echo nl2br("\n");
        #print_r($no_activos[0] -> total);
        #echo nl2br("\n");
        #print_r($activos[0] -> total);
        #echo nl2br("\n");
        #print_r($info);

        return view('totales') -> with ('info', collect($info));
           
	}
    
    public function genero()
	{
            
        $femenino = DB::select(DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE gender = "f";'));
        $masculino = DB::select(DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE gender = "m";'));
        $no_definido = DB::select(DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE gender = "";'));
        
        $f = $femenino[0] -> total;
        $m = $masculino[0] -> total;
        $n = $no_definido[0] -> total;
        
        $infot = array($f, $m, $n); 

        return view('genero') -> with ('infot', collect($infot));
           
	}
    
    public function edad()
	{
            
        $edad15 = DB::select(DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=15;'));
        $edad15_20 = DB::select(DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=20 and year(now()) - year_of_birth >15;'));
        $edad20_25 = DB::select(DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=25 and year(now()) - year_of_birth >20;'));
        $edad25_30 = DB::select (DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=30 and year(now()) - year_of_birth >25;'));
        $edad30_35 = DB::select (DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=35 and year(now()) - year_of_birth >30;'));
        $edad35_40 = DB::select (DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=40 and year(now()) - year_of_birth >35;'));
        $edad40_45 = DB::select (DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=45 and year(now()) - year_of_birth >40;'));
        $edad45_50 = DB::select (DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth <=50 and year(now()) - year_of_birth >40;'));
        $edad50 = DB::select (DB::raw('SELECT count(id) as total FROM auth_userprofile WHERE year(now()) - year_of_birth >50;'));
        
        
        $e0 = $edad15[0] -> total;
        $e1 = $edad15_20[0] -> total;
        $e2 = $edad20_25[0] -> total;
        $e3 = $edad25_30[0] -> total;
        $e4 = $edad30_35[0] -> total;
        $e5 = $edad35_40[0] -> total;
        $e6 = $edad40_45[0] -> total;
        $e7 = $edad45_50[0] -> total;
        $e8 = $edad50[0] -> total;
        
        $edad = array($e0,$e1,$e2,$e3,$e4,$e5,$e6,$e7,$e8); 
          
        return view('edades') -> with ('edad', collect($edad));
           
	}
    
        public function nivel()
	{
            
        $doctorado = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "p";'));
        $maestria = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "m";'));
        $tecnico = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "a";'));
        $licencia = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "b";'));
        $prepa = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "hs";'));
        $secu = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "jhs";'));
        $prima = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "el";'));
        $ninguna = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "none";'));
        $otra = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "other";'));
        $no_esp = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "";'));
        $d_ciencia = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "p_se";'));
        $d_otro = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "p_oth";'));
        $nada = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE level_of_education = "NULL";'));
            
        $d = $doctorado[0] -> total;
        $m = $maestria[0] -> total;
        $t = $tecnico[0] -> total;
        $l = $licencia[0] -> total;
        $p = $prepa[0] -> total;
        $s = $secu[0] -> total;
        $pr = $prima[0] -> total;
        $n = $ninguna[0] -> total;
        $o = $otra[0] -> total;
        $ne = $no_esp[0] -> total;
        $dc = $d_ciencia[0] -> total;
        $do = $d_otro[0] -> total;
        $na = $nada[0] -> total;
         
        $estudio = array($d, $m, $t, $l, $p, $s, $pr, $n, $o, $ne, $dc, $do, $na); 
            
        #print_r($estudio);

        return view('nivel') -> with ('estudio', collect($estudio));
           
	}
    
    public function geo(){
        
        $ag = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "AG";'));
        $AG = $ag[0] -> total;
        
        $bc = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "BC";'));
        $BC = $bc[0] -> total;
        
        $bs = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "BS";'));
        $BS = $bs[0] -> total;
        
        $cc = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "CC";'));
        $CC = $cc[0] -> total;
        
        $cs = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "CS";'));
        $CS = $cs[0] -> total;
        
        $ch = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "CH";'));
        $CH = $ch[0] -> total;
        
        $cl = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "CL";'));
        $CL = $cl[0] -> total;
        
        $cm = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "CM";'));
        $CM = $cm[0] -> total;
        
        $df = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "DF";'));
        $DF = $df[0] -> total;
        
        $dg = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "DG";'));
        $DG = $dg[0] -> total;
        
        $gt = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "GT";'));
        $GT = $gt[0] -> total;
        
        $gr = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "GR";'));
        $GR = $gr[0] -> total;
        
        $hg = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "HG";'));
        $HG = $hg[0] -> total;
        
        $jc = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "JC";'));
        $JC = $jc[0] -> total;
        
        $mc = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "MC";'));
        $MC = $mc[0] -> total;
        
        $mn = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "MN";'));
        $MN = $mn[0] -> total;
        
        $ms = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "MS";'));
        $MS = $ms[0] -> total;
        
        $nt = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "NT";'));
        $NT = $nt[0] -> total;
        
        $nl = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "NL";'));
        $NL = $nl[0] -> total;
        
        $oc = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "OC";'));
        $OC = $oc[0] -> total;
        
        $pl = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "PL";'));
        $PL = $pl[0] -> total;
        
        $qt = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "QT";'));
        $QT = $qt[0] -> total;
        
        $qr = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "QR";'));
        $QR = $qr[0] -> total;
        
        $sp = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "SP";'));
        $SP = $sp[0] -> total;
        
        $sl = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "SL";'));
        $SL = $sl[0] -> total;
        
        $sr = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "SR";'));
        $SR = $sr[0] -> total;
                
        $tc = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "TC";'));
        $TC = $tc[0] -> total;
        
        $ts = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "TS";'));
        $TS = $ts[0] -> total;
        
        $tl = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "TL";'));
        $TL = $tl[0] -> total;
        
        $vz = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "VZ";'));
        $VZ = $vz[0] -> total;
        
        $yn = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "YN";'));
        $YN = $yn[0] -> total;
        
        $zs = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "ZS";'));
        $ZS = $zs[0] -> total;
        
        $ex = DB::select(DB::raw('SELECT COUNT(id) as total FROM auth_userprofile WHERE country = "EX";'));
        $EX = $ex[0] -> total;
        
  
        
        $geo = array($AG, $BC, $BS, $CC, $CS, $CH, $CL, $CM, $DF, $DG, $GT, $GR, $HG, $JC, $MC, $MN, $MS, $NT, $NL, $OC, $PL, $QT, $QR, $SP, $SL, $SR, $TC, $TS, $TL, $VZ, $YN, $ZS, $EX);
        
        return view('geo') -> with('geo', collect($geo));
    }
    
    
        
        

}