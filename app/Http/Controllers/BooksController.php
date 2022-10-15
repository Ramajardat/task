<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookView = array(
            // Ankit will act as key
            "1" => array(
                // Subject and marks are
                // the key value pair
                "book_title" => "Things Fall Apart",
                "book_description" =>  "English Nigeria",
                "book_auther" => 'Chinua Achebe',
                "book_image" => "https://m.media-amazon.com/images/I/81H+63TZuFL.jpg",
            ),
            "2" => array(
                // Subject and marks are
                // the key value pair
                "book_title" => 'Fairy tales',
                "book_description" => 'Danish Denmark',
                "book_auther" => 'Hans Christian Andersen',
                "book_image" => 'https://m.media-amazon.com/images/I/81CAKo3L7aL.jpg',
            ), "3" => array(

                // Subject and marks are
                // the key value pair
                "book_title" => "The Divine Comedy",
                "book_description" => "Italian ",
                "book_auther" => 'Dante Alighieri',
                "book_image" => "https://m.media-amazon.com/images/M/MV5BNjEwYmEwMDgtNzg2NC00MDNmLTgyYjAtOGExODBjYjdjMDJkXkEyXkFqcGdeQXVyODUwMzI5ODk@._V1_.jpg",
            ), "4" => array(

                // Subject and marks are
                // the key value pair
                "book_title" => "Pride and Prejudice",
                "book_description" => "United Kingdom",
                "book_auther" => 'Jane Austen',
                "book_image" => "https://m.media-amazon.com/images/M/MV5BMTA1NDQ3NTcyOTNeQTJeQWpwZ15BbWU3MDA0MzA4MzE@._V1_.jpg",
            ), "5" => array(
                // Subject and marks are
                // the key value pair
                "book_title" => "Wuthering Heights",
                "book_description" => "United Kingdom",
                "book_auther" => 'Emily Bront',
                "book_image" => "https://m.media-amazon.com/images/I/71TjAcMTDML.jpg",
            ),
        );
        $books = Books::all();

        return view('index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // dd($request);
        // echo "</pre>";

        // $book = Books::all();
        // dd($book);

        $this->validate($request, [
            'book_title'         => 'required',
            'book_description'   => 'required',
            'book_auther'        => 'required',
            'book_image'         => 'required',
        ]);
        $book = new Books();

        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_auther = $request->book_auther;
        $book->book_image = $request->book_image;
        $book->save();
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $findBook = Books::find($id);
        // dd($findBook);
        return view('update_books', ['request' => $findBook, 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
