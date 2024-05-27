<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = movie::all();
            
        $data = [
            'movies' => $movies
        ];
            
        return view('movie.showAllMovie', $data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie.createMovie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData= $request->all();
        
        $newMovie = new movie();
        $newMovie->title = $formData['title'];
        $newMovie->description = $formData['description'];
        $newMovie->thumb = $formData['thumb'];
        $newMovie->price = $formData['price'];
        $newMovie->series = $formData['series'];
        $newMovie->sale_date = $formData['sale_date'];
        $newMovie->type = $formData['type'];
        $newMovie->save();

        return redirect()->route('movies.show', ['movie' => $newMovie->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movies = movie::find($id);

        $data = [
            'movies' => $movies
        ];

        return view('movie.showSingleMovie', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = movie::find($id);

        $data = [
            'movie' => $movies
        ];

        return view('movie.editMovie', $data);
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
        $movieModified = movie::findOrFail($id);
        $dataUpdated = $request->all();
        $movieModified->fill($dataUpdated);
        $movieModified->save($dataUpdated);

        return redirect()->route('movies.show', ['movie' => $movieModified->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('movies.index');
    }
}
