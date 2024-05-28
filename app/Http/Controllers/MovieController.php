<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use Illuminate\Support\Facades\Validator;

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
        
        $validated = $request->validate([
                'title' => 'required|min:5|max:50',
                'description' => 'nullable|min:50|max:5000',
                'thumb' => 'required',
                'series' => 'nullable|min:5|max:50',
                'sale_date' => 'required',
                'type' => 'required|min:5|max:50',
                'price' => 'required|numeric|min:1|max:5000'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.min' => 'Il titolo deve essere composto da almeno cinque caratteri',
                'title.max' => 'Il titolo non può avere più di cinquanta caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'description.min' => 'La descrizione deve essere composta da almeno cinquanta caratteri',
                'description.max' => 'La descrizione non può avere più di cinquemila caratteri',
                'thumb.required' => 'Il link per la foto è obbligatorio',
                'series.min' => 'La serie deve essere composto da almeno cinque caratteri',
                'series.max' => 'La serie non può avere più di cinquanta caratteri',
                'type.required' => 'Il genere è obbligatorio',
                'type.min' => 'Il genere deve essere composto da almeno cinque caratteri',
                'type.max' => 'Il genere non può avere più di cinquanta caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.numeric' => 'Il prezzo deve essere un numero',
                'price.min' => 'Il prezzo non può essere inferiore a uno',
                'price.max' => 'Il prezzo non può essere superiore a cinquemila',
                'sale_date.required' => 'La data è di pubblicazione è obbligatoria'
            ]
    );

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
            'movie' => $movies
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

        $formData = $request->all();
        $this->validation($formData);
        $movieModified->fill($formData);
        $movieModified->save($formData);

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

    private function validation($data)
    {
        $validator = Validator::make(
            $data,
            [
                'title' => 'required|min:5|max:50',
                'description' => 'nullable|min:50|max:5000',
                'thumb' => 'required',
                'series' => 'nullable|min:5|max:50',
                'sale_date' => 'required',
                'type' => 'required|min:5|max:50',
                'price' => 'required|numeric|min:1|max:5000'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.min' => 'Il titolo deve essere composto da almeno cinque caratteri',
                'title.max' => 'Il titolo non può avere più di cinquanta caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'description.min' => 'La descrizione deve essere composta da almeno cinquanta caratteri',
                'description.max' => 'La descrizione non può avere più di cinquemila caratteri',
                'thumb.required' => 'Il link per la foto è obbligatorio',
                'series.min' => 'La serie deve essere composto da almeno cinque caratteri',
                'series.max' => 'La serie non può avere più di cinquanta caratteri',
                'type.required' => 'Il genere è obbligatorio',
                'type.min' => 'Il genere deve essere composto da almeno cinque caratteri',
                'type.max' => 'Il genere non può avere più di cinquanta caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.numeric' => 'Il prezzo deve essere un numero',
                'price.min' => 'Il prezzo non può essere inferiore a uno',
                'price.max' => 'Il prezzo non può essere superiore a cinquemila',
                'sale_date.required' => 'La data è di pubblicazione è obbligatoria'
            ]
        )->validate();
        
        return $validator;
    }
}
