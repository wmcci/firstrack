<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Video;

class VideosController extends Controller
{
    public function index()
    {
        return view('Admin.videos');
    }

    public function allVideos(){

        return view('Admin.videos_all');
    }


    public function StoreVideos(Request $request){

            $request->validate([
            'description' => 'required',
            'fichier'=> 'required|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts,qt|max:30000',

        ],

        [
        'description.required' => 'La description  de la vidéo est requise',
        'fichier.required' => 'La vidéo est requise',
        'fichier.mimes' => 'L\'extension du fichier choisi pas valide',
        'fichier.max' => 'La taille du fichier doit être inférieure ou égale à 30MB'
       ]);


           $mags = $request->file('fichier');

		if($request->hasFile('fichier')){
			// $resume = $request->file('resume');
			// $letter = $request->file('cov_letter');
			$path = $mags->store('uploads','public');
			// $path2 = $letter->store('uploads', 'public');
			Video::insert([

            // 'user_id' => Auth::guard('admin')->user()->id,
            'description' => $request->description,
            'fichier'=> $path,
            'created_at' => Carbon::now()
               ]);
               $notification = array(
                'message' => 'Video Ajoutée avec succès',
                'alert-type' => 'success'
              );
              return Redirect()->back()->with($notification);
	}




    }
}
