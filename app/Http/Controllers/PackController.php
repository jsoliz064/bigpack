<?php

namespace App\Http\Controllers;

use App\Models\Pack;
use App\Models\Materia;
use App\Models\Docente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackController extends Controller
{
    public function __construct()
    {   //               ('can:materias.index') aprobando permiso, ->only('index') solo para el metodo index
        $this->middleware('can:packs.index')->only('index');
        $this->middleware('can:packs.create')->only('create', 'store');
        $this->middleware('can:packs.edit')->only('edit', 'update');
        $this->middleware('can:packs.destroy')->only('destroy');
    }

    public function index()
    {
        $packs=Pack::all();
        return view('pack.index',compact('packs'));
    }
    public function indexPost(Request $request, $idMateria){
        $packs = DB::table('packs')->where('id_materia',$idMateria)->get();
        $materia=DB::table('materias')->where('id',$idMateria)->value('nombre');
        // $packs =Pack::paginate(5);
        /* if ($request->ajax()){
            $view =view('packPost.dataPack',compact('packs'))->render();
            return response()->json(['html'=>$view]);
        } */
        return view('packPost.postPack',compact('packs','materia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = DB::table('materias')->get();
        $docentes = DB::table('docentes')->get();
        return view('pack.create',['materias'=>$materias],['docentes'=>$docentes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("America/La_Paz");
        $pack=Pack::create([
            'id_materia'=>request('id_materia'),
            'id_docente'=>request('id_docente'),
            'link'=>request('link'),
            'descripcion'=>request('descripcion'),
        ]);
        return redirect()->route('packs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function show(Pack $pack)
    {
        return view('pack.show',compact ('pack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function edit(Pack $pack)
    {
        $materias = DB::table('materias')->get();
        $docentes = DB::table('docentes')->get();
        return view('pack.edit',compact('pack','materias','docentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pack $pack)
    {
        date_default_timezone_set("America/La_Paz");
        $pack->id_materia=$request->id_materia;
        $pack->id_docente=$request->id_docente;
        $pack->link=$request->link;
        $pack->descripcion=$request->descripcion;
        $pack->save();

        return redirect()->route('packs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pack  $pack
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pack $pack)
    {
        $pack->delete();
        return redirect()->route('packs.index');
    }
}
