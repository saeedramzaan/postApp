<?php

namespace App\Http\Controllers;

use App\Image;
use App\Tweet;

class PostsController extends Controller
{
    public function index()
    {

        $factURL = 'https://picsum.photos/v2/list?page=1&limit=10';
        $contactURL = 'https://jsonplaceholder.typicode.com/users';

        $readFact = file_get_contents($factURL);
        $readContact = file_get_contents($contactURL);

        $factArray = json_decode($readFact, true);
        $contactArray = json_decode($readContact, true);

        $pic_array = $factArray;
        $con_array = $contactArray;

        $imagesDir = 'images/avatar/';
        $images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        $contact = array($con_array, $images);

        return view('posts.index', ['tweets' => auth()->user()->timeline()], compact('contact'))->with(compact('pic_array'));

    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255',
            'title' => 'required|max:255',
        ]);

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $input['image'] = $imageName;
        request()->image->move(public_path('images'), $imageName);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'image' => $input['image'],
            'title' => $attributes['title'],
        ]);

        return redirect()->route('home');
    }
}
