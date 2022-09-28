<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Fichier;

class FichiersController extends Controller
{
    public function index(){
        return view('Admin.fichiers');
    }


      public function allFichiers(){


        $fichiers = Fichier::latest()->get();
        return view('Admin.fichiers_all', compact('fichiers'));
    }


    public function storeFichiers(Request $request){

           $request->validate([
            'description' => 'required',
            'fichier'=> 'required|mimes:pdf,docx|max:10000',

        ],

        [
        'description.required' => 'La description  du fichier est requise',
        'fichier.required' => 'Le document est requis',
        'fichier.mimes' => 'L\'extension du fichier choisi pas valide',
        'fichier.max' => 'La taille du fichier doit être inférieure ou égale à 10MB'
       ]);


    //     $fileUpload = new Fichier;
    //     $tutos = $request->file('fichier');

    //     if($request->hasFile('fichier')) {
    //     $file = $request->file('fichier');
    //     $fileName = time().'_'.$request->fichier->getClientOriginalName();
    //   $file->move('uploads/images', $fileName);

    //     // $file->store('uploads/tutoriels','public');
    //     $fileUpload->description = $request->description;
    //     // $fileUpload->tut_author = $request->tut_author;
    //     // $fileUpload->tut_content = $request->tut_content;
    //     $fileUpload->fichier = $fileName;
    //     $fileUpload->created_at	= Carbon::now();
    //     $fileUpload->save();

    //     $notification = array(
    //         'message' => 'fichier ajouté avec succès',
    //         'alert-type' => 'success'
    //       );

    //       return Redirect()->back()->with($notification);



    $mags = $request->file('fichier');

		if($request->hasFile('fichier')){
			// $resume = $request->file('resume');
			// $letter = $request->file('cov_letter');
			$path = $mags->store('uploads','public');
			// $path2 = $letter->store('uploads', 'public');
			Fichier::insert([

            // 'user_id' => Auth::guard('admin')->user()->id,
            'description' => $request->description,
            'fichier'=> $path,
            'created_at' => Carbon::now()
            ]);
               $notification = array(
                'message' => 'Fichier Ajouté avec succès',
                'alert-type' => 'success'
              );
              return Redirect()->back('admin_home')->with($notification);
	}


    }


     public function DeleteFichier($id){
        $magazine = Fichier::find($id);
        $magazine->delete();
        $notification = array(
            'message' => 'Fichier supprimé avec succès',
            'alert-type' => 'error'
          );
          return Redirect()->back()->with($notification);
    }
}


