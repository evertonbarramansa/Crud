<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Modelcarros;
use App\Models\User;

class CarroController extends Controller
{
    private $objUser;
    private $objcarros;


    public function __construct()

    {
        $this->objUser=new User();
        $this->objcarros=new Modelcarros();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view( "index");//
       $carros=$this->objcarros->paginate(8);//quando uso paginate
       //limita a quantidade de registro que a tela mostra, se usar all mostra todos
       return view('index',compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objcarros->create([
            'modelo'=>$request->modelo,
            'ano_lancamento'=>$request->ano_lancamento,
            'valor'=>$request->valor,
            'id_user'=>$request->id_user
         ]);
     
         if($cad){
             return redirect('carros');
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
       $carros=$this->objcarros->find($id);
        return view('show',compact('carros'));
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carros=$this->objcarros->find($id);
        $users=$this->objUser->all();
        return view('create',compact('carros','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objcarros->where(['id'=>$id])->update([
            'modelo'=>$request->modelo,
            'ano_lancamento'=>$request->ano_lancamento,
            'valor'=>$request->valor,
            'id_user'=>$request->id_user
        ]);
        return redirect('carros');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objcarros->destroy($id);
        return($del)?"sim":"não";
    }
}