<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
     public function index(){
        return Movie::all();
    }

     public function show($id){
        return Movie::find($id);
    }

     public function store(MovieRequest $request ){
         
        return Movie::create($request->all());

    }

     public function update(MovieRequest $request, $id)
    {
        $movie = Movie::find($id);
        $movie->update($request->all());
        return $movie;

    }

     public function delete($id){
        $movie = Movie::find($id);
        $movie->delete();
    }
}
