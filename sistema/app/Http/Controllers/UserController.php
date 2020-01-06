<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        $users = User::where('estatus','activo')->where('rol','<>','administrador')->get();
        return view('axicasa.admin.employees.index',compact('users'));
    }
    public function create(){
        $user = new User();
        return view('axicasa.admin.employees.create',compact('user'));
    }
    public function store(Request $request,User $user){
        $response = $user->createNew($request->all());
        return redirect('/administrador/empleados')->with('status_success','Empleado registrado correctamente');
    }
    public function show($id){
        //
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('axicasa.admin.employees.edit',compact('user'));
    }
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->email = $request->email;
        $user->name  = $request->name;
        if ($request->password != null){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect('/administrador/empleados')->with('status_success','Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
