<?php

namespace App\Http\Controllers;

use App\Http\Resources\EventsResource;
use App\Http\Resources\EventCategoryResource;
use App\Http\Resources\CategoryEventsResource;
use App\Model\Event;
use App\Model\EventCategory;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $event = Event::with('EventCategory')->get();
        $response = EventsResource::collection($event);
        return ['status' => true,'message'=> 'success', 'data' => $response];
       

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function categories()
    {
        $category = EventCategory::get();
        $response = EventCategoryResource::collection($category);
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
        //only one event with id
        $event = Event::find($id);
        if(!$event) {
            return response()->json(['status'=> false, 'message'=>'invalid data'],200);

        }
        
        $response = new EventsResource($event);
        return response()->json(['status' => true,'message'=>'succsess' ,'data' => $response], 200);
        //return one event

    }

    public function showcategory($id)
    {
        //only one category and events related to category with id
        $category = EventCategory::find($id);
        if(!$category) {
            return response()->json(['status'=> false, 'message'=>'invalid data'],200);

        }
        
        $response = new CategoryEventsResource($category);
        return response()->json(['status' => true,'message'=>'succsess' ,'data' => $response], 200);
        //return one category

    }

    

    
}
