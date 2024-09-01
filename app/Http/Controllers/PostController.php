<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Ottengo tutti gli articoli 
        $posts = [
            'posts' => Post::all()
        ];

        //Mostro la vista
        return view('blog.index', $posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostro la vista
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {

        //Carico l'immagine dell'articolo
        $image = $request->file('image');

        $imageName = $request->url . '.' . $image->extension();

        $image->storeAs('public/images', $imageName);

        //Salvo l'articolo nel db
        $post = new Post;

        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $imageName;
        $post->url = $request->url;

        $post->save();

        return redirect('/blog');

    }

    /**
     * Display the specified resource.
     */
    public function show($url, $id)
    {
        //Ottengo l'articolo selezionato
        $post = [
            'post' => Post::find($id)
        ];

        //Pagina articolo singolo
        return view('blog.show', $post);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //Ottengo i dettagli dell'articolo
        $post = [
           'post' => Post::find($id)
        ];


        //Mostro il form di aggiornamento articolo
        return view('blog.edit', $post);

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, $id)
    {
        //Aggiorno l'articolo nel db
        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        //Controllo se l'immagine è stata caricata

        if($request->hasFile('image')) {

            //Carico l'immagine dell'articolo
            $image = $request->file('image');
            $imageName = $request->url . '.' . $image->extension();
            $image->storeAs('public/images', $imageName);



            $post->image = $imageName;
        
        } 
            
        $post->url = $request->url;

        $post->save();

        return redirect('/blog/' . $post->url . '/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Elimino l'articolo specifico dal db
        $post = Post::find($id);

        $post->delete();

        return redirect('/blog');
    }
}
