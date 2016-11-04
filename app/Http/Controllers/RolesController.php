<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Role;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PDOException;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            return Role::all()->toJson();
        }
        catch(QueryException $e){
            return $e->getMessage();
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
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
     * @param RoleRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        try{
            return Role::create($request->all());
        }
        catch(QueryException $e){
            return $e->getMessage();
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
        catch(Exception $e){
            return $e->getMessage();
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
        try{
            return Role::findOrFail($id);
        }
        catch(QueryException $e){
            return $e->getMessage();
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try{
            $car = Role::findOrFail($id);
            return $car->update($request->all());
        }
        catch(QueryException $e){
            return $e->getMessage();
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            return Role::destroy($id);
        }
        catch(QueryException $e){
            return $e->getMessage();
        }
        catch(PDOException $e){
            return $e->getMessage();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
    }
}
