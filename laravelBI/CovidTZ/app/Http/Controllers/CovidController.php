<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CovidController extends Controller
{
    public function index()
    {
      $eu=  DB::select('SELECT * FROM `eu_zonak` ');
   $kereskedelem=   DB::select('SELECT * FROM `vilagkereskedelem_zonak`');
        $magyaradatok = DB::select('SELECT round(sum(import),2) as oimport, round(sum(export),2) as oexport, round(sum(import + export),2) as oimportexport from magyar_havi_adatok');

        return view('index',['eu'=>$eu , 'kereskedelem'=>$kereskedelem, 'magyaradatok' =>$magyaradatok]);
    }
    public function europa(Request $request)
    {
        unset($request['_token']);
        if ($request->zonak==null)
        {
            return back();
        }

       $gazdasag= DB::select('SELECT zonanev,datum,szazalekpont FROM `eu_zonadatok` INNER JOIN eu_adatok ON adatokID =eu_adatok.id INNER JOIN eu_zonak ON zonakID =eu_zonak.id WHERE zonakID=?',[$request->zonak]);

        return view('gazdasag',['gazdasag'=>$gazdasag]);
    }
    public function vilagker(Request $request)
    {
        unset($request['_token']);
        if ($request->zonak==null)
        {
            return back();
        }
       $kulker = DB::select('SELECT zonanev,datum,szazalekpont FROM `vilagkereskedelem_adatok` INNER JOIN vilagkereskedelem_zonak ON vilagkereskedelem_zonak.id=zonaID WHERE zonaID=?;',[$request->zonak]);
        return view('kulker',['kulker'=>$kulker]);
    }
    public  function adatok ()
    {
        $adatokmagyar = DB::select('SELECT datum, import, export from magyar_havi_adatok');

        return view('adatok', ['adatokmagyar' =>$adatokmagyar]);
    }
}
