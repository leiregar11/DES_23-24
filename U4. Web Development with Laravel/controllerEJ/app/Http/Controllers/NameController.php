<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $variable=[1, "Hola", 3.14, True, "Mundo"];
        return view("test",["variable"=>$variable]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getName(Request $req)
    {
        $name=$req->input("name");
        $lastname=$req->input("lastname");
        if(empty($name) && empty($lastname)){
            $name='Anonymous';
            $lastname="user";
        }
        return view("formAge",[
            "name"=>$name,
            "lastname"=>$lastname
        ]);
        
    }

    public function showNameLastname()
    {

        return view("formName");
        
    }
    public function getAge(Request $req)
    {
        $name=$req->input("name");
        $lastname=$req->input("lastname");
        $age=$req->input("age");
        if(empty($name) && empty($lastname)){
            $name='Anonymous';
            $lastname="user";
        }
        return view("finalView",[
            "name"=>$name,
            "lastname"=>$lastname,
            "age"=>$age
        ]);
        
        
    }

    public function showAge()
    {
        
        return view("formAge",[
            "name"=>'Anonymous',
            "lastname"=>"user"
        ]);
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
