<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return "it's working" . "The number " . $id;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return"I am the method that creates stuff";
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
        return "This is the show method" . $id;
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

    public function contact()
    {
        //$people = ['Luka', 'Jose','James','Peter','Maria'];

        $people=[];
        return view('contact', compact('people'));
    }

    public function show_post($id,$name,$password){
        //return view('post')->with('id',$id);
        return view('post', compact('id','name','password'));

    }
}
