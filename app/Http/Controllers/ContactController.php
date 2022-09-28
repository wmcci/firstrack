<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ContactController extends Controller

{

    public function indexContact(){
        return view('welcome');
    }


    public function allContacts(){

        return view('contact.contacts_all');
    }


    public function insertContact(Request $request){

          $request->validate([
            'nom' => 'required',
            'prenoms' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'numTel' => 'required|digits:10',
            'message' => 'required|max:500',

        ],


        [
        'nom.required' => 'Le champ nom est requis',
        'prenoms.required' => 'Le champ prénoms est requis',
        'email.required' => 'Le champ email est requis',
        'numTel.required' => 'Le champ Numéro de téléphone est requis',

        'numTel.digits' => 'Svp entrez un numéro de téléphone valide de 10 chiffres max',

        'message.required' => 'Le champ Message est requis',
        'message.max' => 'Votre message ne doit pas dépasser 150 caractères',

        'email.email' => 'Le champ doit être une adresse mail valide',

        'email.unique' => 'Vous avez déjà souscrit à notre newsletter',
        ]);


    Contact::insert([
        'nom' => $request->nom,
        'prenoms' => $request->prenoms,
        'email' => $request->email,
        'numTel' => $request->numTel,
        'message' => $request->message,
        'created_at' => Carbon::now()
    ]);


       $notification = array(
            'message' => 'Merci nous prendrons contact avec vous bientôt',
            'alert-type' => 'success'
          );

      return Redirect()->back()->with($notification);
 }

    public function DeleteContact($id){
        $magazine = Contact::find($id);
        $magazine->delete();
        $notification = array(
            'message' => 'Contact supprimé avec succès',
            'alert-type' => 'error'
          );
          return Redirect()->back()->with($notification);
    }
}
