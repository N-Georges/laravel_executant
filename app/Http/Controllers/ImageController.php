<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Categorie;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function gallerie()
    {
        $image = Image::all();
        return view('admin.gallerie.main', compact('image'));
    }
    public function download(Image $image)
    {
        // $image = Image::find($file);
        return Storage::disk('public')->download('img/'. $image->name_url);
        // return redirect()->back()->with('success', "image en téléchargement ...");
    }
    
    public function image()
    {
        $image = Image::all();
        $categorie = Categorie::all();
        return view('admin.image-admin.main', compact('image', 'categorie'));
    }
    public function avatar()
    {
        $avatar = Avatar::all();
        return view('admin.avatar.main', compact('avatar'));
    }

    public function store_avatar(Request $request)
    {
        $request->validate([
            'name_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

       //STORAGE
       $path = 'img/';
       $file = $request->file('name_url');
       // dd($file);
       $new_image_name = date('Ymd').uniqid().'.jpg';
       $file->move(public_path($path), $new_image_name);

       //DB
       $file = new Avatar();
       $file->name_url = $new_image_name;
       $file->type = $request->type;
       $file->save();

        return redirect()->route('avatars.index')->with('success', 'data add');;
    }
    public function destroy_avatar(Avatar $id)
    {
        //logique pour attribuer un avatar par défaut à tous les users dont l'avatar va être supprimé
        $users = User::all()->where('avatar_id', $id->id);
        foreach ($users as $user) {
            $user->avatar_id = 1 ;   //seed 1 = avatar défault
            $user->save();
        }
        $id->delete();
        return Redirect()->back()->with('warning', 'data delete');
    }
    
    public function store_image(Request $request)
    {
        $request->validate([
            'name_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

       //STORAGE
       $path = 'img/';
       $file = $request->file('name_url');
       // dd($file);
       $new_image_name = date('Ymd').uniqid().'.jpg';
       $file->move(public_path($path), $new_image_name);

       //DB
       $file = new Image();
       $file->name_url = $new_image_name;
       $file->title = $request->title;
       $file->categorie_id = $request->categorie;
       $file->save();

        return redirect()->route('images.index')->with('success', 'data add');;
    }
    public function destroy(Image $id)
    {
        $id->delete();
        return redirect()->back()->with('warning', 'data delete');;
    }
    public function show(Image $file)
    {
        //
    }
    
    public function edit(Image $file)
    {
        //
    }
    
    
    
    // edit categorie and delete
    public function edit_cat(Categorie $id)
    {
        $cat = $id;
        $categorie = Categorie::all();
        return view('admin.categorie.edit', compact('cat', 'categorie'));
    }
    
    public function update_cat(Categorie $id, Request $request)
    {
        $cat = $id;
        $cat->categorie = $request->categorie;
        $cat->save();

        return redirect()->route('categories.index')->with('success', 'data update');;
        return redirect('categories.index' . $cat->id);

    }

    public function categorie()
    {
        $cat = Categorie::all();
        return view('admin.categorie.main', compact('cat'));
    }


    public function store_cat(Request $request)
    {
        $cat = new Categorie();
        $cat -> categorie = $request->categorie;
        $cat -> save();
        return Redirect()->back()->with('success', 'data add');
    }
    
    public function destroy_cat(Categorie $id)
    {
        $id->delete();
        return Redirect()->back()->with('warning', 'data delete');
    }
}
