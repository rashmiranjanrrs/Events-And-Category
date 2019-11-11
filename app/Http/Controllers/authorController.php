<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Author;
use App\Model\AuthorProfile;
use App\Http\Resources\authorprofile as profileResource;
use App\Http\Resources\author as authorResource;
use Dotenv\Regex\Success;

class authorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get autors
        
        $authors = Author::with('Authorprofile')->get();

    
        //Return collection of authors as a resource
        $response = authorResource::collection($authors);
        return ['status' => true,'message'=> 'success', 'data' => $response];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //only one author with id
        $author = Author::find($id);
        if(!$author) {
            return response()->json(['status'=> false, 'message'=>'invalid data'],200);

        }
        
        $response = new authorResource (($author),($author->Authorprofile));
        return response()->json(['status' => true,'message'=>'succsess' ,'data' => $response], 200);
        //return one author
        
        
    }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $profile = AuthorProfile::find($id);
        
        if(!$profile) {
            return response()->json(['status'=> false, 'message'=>'invalid data'],200);

        }
        
        $response = new profileResource ($profile);
        return response()->json(['status' => true,'message'=>'succsess' ,'data' => $response], 200);
        //return one author
         
    }
}
