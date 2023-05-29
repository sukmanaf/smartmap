<?php

namespace App\Http\Controllers;

use App\Models\Maps;
use App\Models\Nop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MapsController extends Controller
{
    public function index()
    {
        // $maps = DB::table('nops')
        //     ->select(DB::raw('nops.*,ST_AsGeoJSON(geom)::json as geom' ))
        //     ->get();
        //    // echo "<pre>";
        //    // print_r ($maps[0]);
        //    // echo "</pre>";
		// 	$str= '{"type" : "FeatureCollection", "features" : [';

        //    foreach ($maps as $key => $value) {
				
		// 		$text  = '{"type": "Feature", "geometry":'.$value->geom.',"properties":';
		// 		unset($value->geom);
        //         // foreach ($value as $k => $v) {
        //         //     $k = strtolower($k);
        //         //     // unset($value['geom']);
                    
        //         //     $a[$k]=$v;   
        //         // }
        //         $text .=json_encode($value); 
                
		// 		$str .= $text.'},';
        //    }
        //    $str = substr($str,0,-1);
        //     $str .= ']}';
		// 		echo $str;
        //    		exit();         		
        // $maps = Maps::all();
        // // Fetch all mapss from the database
        // // $users = User::all();
        // $maps = DB::table('nops')->get();
        // dd($maps);
        // return response()->json([
        //     'data' => [
        //         'd_nop' => $maps->d_nop,
        //         'd_luas' => $maps->d_luas, 
        //         'geom' => $maps->geom 
        //     ]
        // ]);
        // echo "<pre>";
        // print_r ($maps);
        // echo "</pre>";exit();
        // $name = DB::table('bangunans')->where('d_nop','357501000100301840001')->get();
        // $name = DB::table('sessions')->get();
        // DB::enableQueryLog(); // Enable query log

        // Your Eloquent query executed by using get()


        return view('maps.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $jns = $request['jns'];
        // exit();
        $table = '';
        if ($jns == 'nop') {
            $table = 'nops';
        }
        if ($jns == 'blok') {
            $table = 'bloks';
        }
        if ($jns == 'bangunan') {
            $table = 'bangunans';
        }

        if ($table=='') {
            dd('Jns Kosong');
        }


        $data = file_get_contents(@$_FILES['files']['tmp_name']);
        $data = json_decode($data);

        // dd($data);
        
        
        $type=$data->features[0]->geometry->type;
        $ins=[];
        foreach ($data->features as $key => $value) {
            
            $str =  'tipe((';
            $ar =[];
            // echo "<pre>";
            // print_r ($value->geometry->coordinates[0]);
            // echo "</pre>";exit();
            
            
            //foreach pembuatan geometry
            foreach ($value->geometry->coordinates[0] as $key2 => $value2) {
                $tipee = $value->geometry->type;
                    $str = str_replace('tipe',$tipee,$str);
                // echo "<pre>";
                // print_r ($value2);
                // echo "</pre>";
                
                if(!is_array($value2[1])){
                    
                    $str .= @$value2[0].' '.@$value2[1].',';
                }

                else{
                    
                    foreach($value->geometry->coordinates as $k => $v){

                           foreach ($v as $k2 => $v2) {
                                $str .= '(';
                                foreach ($v2 as $k3 => $v3) {
                                    // dd($v3[0]);
                                    $str .= @$v3[0].' '.@$v3[1].',';
                                }
                                $str = mb_substr($str, 0, -1);
                                $str .='),';
                            }
                    }

                    $str = mb_substr($str, 0, -1);
                                $str .=')';
                    
                };
                
            };
            $str = mb_substr($str, 0, -1);
            // $str = mb_substr($str, 0, -1);
            $str.='))';

            // echo $str;
            // exit();
            $a=[];
            // $g=[];
            $adata=$value->properties;
        //pembuatan array insert
            foreach ($adata as $k => $v ) {
                        $kk=strtolower($k);
                        $a[$kk]=$v;
                
            }
            $a['geom']=$str; 
            $a['created_at']=date('Y-m-d H:i:s'); 
            $a['updated_at']=date('Y-m-d H:i:s'); 
            array_push($ins,$a);

        
        }
        dd($ins[0]);
        echo "<pre>";
        print_r ($ins[0]);
        echo "</pre>";exit();
        foreach ($ins as $key => $value) {
            // Nop::insert($value);
            DB::table($table)->insert($value);
        }
        
    }

    public function insNop($value='')
    {
        // dd($_FILES['files']);
        $data = file_get_contents(@$_FILES['files']['tmp_name']);
        $data = json_decode($data);

        // dd($data);
        
        
        $type=$data->features[0]->geometry->type;
        $ins=[];
        foreach ($data->features as $key => $value) {
            
            $str =  'tipe((';
            $ar =[];
            
            //foreach pembuatan geometry
            foreach ($value->geometry->coordinates[0] as $key2 => $value2) {
                $tipee = $value->geometry->type;
                    $str = str_replace('tipe',$tipee,$str);
                // echo "<pre>";
                // print_r ($value2);
                // echo "</pre>";
                
                if(!is_array($value2[1])){
                    
                    $str .= @$value2[0].' '.@$value2[1].',';
                }

                else{
                    
                    foreach($value->geometry->coordinates as $k => $v){

                           foreach ($v as $k2 => $v2) {
                                $str .= '(';
                                foreach ($v2 as $k3 => $v3) {
                                    // dd($v3[0]);
                                    $str .= @$v3[0].' '.@$v3[1].',';
                                }
                                $str = mb_substr($str, 0, -1);
                                $str .='),';
                            }
                    }

                    $str = mb_substr($str, 0, -1);
                                $str .=')';
                    
                };
                
            };
            $str = mb_substr($str, 0, -1);
            // $str = mb_substr($str, 0, -1);
            $str.='))';

            // echo $str;
            // exit();
            $a=[];
            // $g=[];
            $adata=$value->properties;
        //pembuatan array insert
            foreach ($adata as $k => $v ) {
                        $kk=strtolower($k);
                        $a[$kk]=$v;
                
            }
            $a['geom']=$str; 
            $a['created_at']=date('Y-m-d H:i:s'); 
            $a['updated_at']=date('Y-m-d H:i:s'); 
            array_push($ins,$a);

        
        }
        // dd($ins[0]);
        foreach ($ins as $key => $value) {
            Nop::insert($value);
            // DB::table('nop')->insert($value);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function show(Maps $maps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function edit(Maps $maps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maps $maps)
    {
        //
        // dd($request->all());
        // return "test";
        //create post
// DB::enableQueryLog();
        $ins = DB::table('nops')->where('d_nop', $request->nop_old)->update([
            'd_nop'     => $request->nop, 
            'geom'   => $request->geom
        ]);
        // $maps->update([
        //     'd_nop'     => $request->nop, 
        //     'geom'   => $request->geom
        // ]);
// dd(DB::getQueryLog());
        return $ins;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Maps  $maps
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maps $maps)
    {
        //
    }

    public function getNop()
    {
        $maps = DB::table('nops')
            ->select(DB::raw('nops.*,ST_AsGeoJSON(geom)::json as geom' ))
            ->get();

        // $maps = DB::table('nops')->pluck('d_nop', 'geom', 'd_luas')->where('nop','357501000100900910');
           // echo "<pre>";
           // print_r ($maps[0]);
           // echo "</pre>";
			$str= '{"type" : "FeatureCollection", "features" : [';

           foreach ($maps as $key => $value) {
				
				$text  = '{"type": "Feature", "geometry":'.$value->geom.',"properties":';
				unset($value->geom);
                // foreach ($value as $k => $v) {
                //     $k = strtolower($k);
                //     // unset($value['geom']);
                    
                //     $a[$k]=$v;   
                // }
                $text .=json_encode($value); 
                
				$str .= $text.'},';
           }
           $str = substr($str,0,-1);
            $str .= ']}';
           return $str;
    }

    public function getBlok()
    {
        $maps = DB::table('bloks')
            ->select(DB::raw('bloks.*,ST_AsGeoJSON(geom)::json as geom' ))
            ->get();

        // $maps = DB::table('nops')->pluck('d_nop', 'geom', 'd_luas')->where('nop','357501000100900910');
           // echo "<pre>";
           // print_r ($maps[0]);
           // echo "</pre>";
            $str= '{"type" : "FeatureCollection", "features" : [';

           foreach ($maps as $key => $value) {
                
                $text  = '{"type": "Feature", "geometry":'.$value->geom.',"properties":';
                unset($value->geom);
                // foreach ($value as $k => $v) {
                //     $k = strtolower($k);
                //     // unset($value['geom']);
                    
                //     $a[$k]=$v;   
                // }
                $text .=json_encode($value); 
                
                $str .= $text.'},';
           }
           $str = substr($str,0,-1);
            $str .= ']}';
           return $str;
    }
    public function getBng()
    {
        $maps = DB::table('bangunans')
            ->select(DB::raw('bangunans.*,ST_AsGeoJSON(geom)::json as geom' ))
            // ->where('d_nop','357501000100301840001')
            ->get();

        // $maps = DB::table('bangunans')->pluck('d_nop', 'geom')->where('d_nop','357501000100301840001');

           // echo "<pre>";
           // print_r ($maps[0]);
           // echo "</pre>";
            $str= '{"type" : "FeatureCollection", "features" : [';

           foreach ($maps as $key => $value) {
                
                $text  = '{"type": "Feature", "geometry":'.$value->geom.',"properties":';
                unset($value->geom);
                // foreach ($value as $k => $v) {
                //     $k = strtolower($k);
                //     // unset($value['geom']);
                    
                //     $a[$k]=$v;   
                // }
                $text .=json_encode($value); 
                
                $str .= $text.'},';
           }
           $str = substr($str,0,-1);
            $str .= ']}';
           return $str;
    }

      public function getSearchNop($nop)
    {
        $maps = DB::table('nops')
            ->select(DB::raw('ST_AsGeoJSON(geom)::json as geom' ))
            ->where('d_nop',$nop)
            ->get();
        return $maps;

       
    }

    public function save_nop(Request $request)
    {


            $ins['d_nop']=$request['nop']; 
            $ins['d_luas']=0; 
            $ins['geom']=$request['geom']; 
            $ins['created_at']=date('Y-m-d H:i:s'); 
            $ins['updated_at']=date('Y-m-d H:i:s');
            // echo "<pre>";
            // print_r ($ins);
            // echo "</pre>";exit();
            // dd($ins);
            // dd($ins);
            $insert = DB::table('nops')->insert($ins);

            echo "<pre>";
             print_r ($insert);
             echo "</pre>"; 
    }

    public function masuk()
    {
        // $exists = Storage::disk('public')->exists('logo/logo.png');
        return view('maps.login');
        
    }
}
