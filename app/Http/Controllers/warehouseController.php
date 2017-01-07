<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use App\warehouse;
use Mail;
class warehouseController extends Controller
{
    //get wareHouse home page
    public function getHomePage()
    {
       return view('myviews.wareHome')->with('title','Ware house');
    }
    //return form for user to  fill in

    public function getForm()
    {
       return view('myviews.addstock');
    }
    public function storeProduct(Request $request)
    {
        $data=['Item'=>$request['Item']];
        $rules=['Item'=>'required|min:2|max:255',
               'Quantity'=>'required|numeric',
                'Price'=>'required|numeric',
                'Description'=>'required|min:7|max:255'
               ];
        $validate=Validator::make($request->all(),$rules);
        if ($validate->fails())
        {
           return Redirect()->route('addStock')->withErrors($validate);
        }
       else
       {
        //Redirect::to_route('addStock')->with('success','Added stock successfully');
           //add to database
        warehouse::create($request->all());
           //send success mail to user
           mail::send('myviews.success-mail',$data,function($message)
           {
               $message->to('enaardayfio@gmail.com');
               
           });
           return Redirect('create')->with('success','Stock has been sucessfully added to the database');
       
       }
    }
    //form will return all the items in the database
    public function  getItems()
    {
        return view('myviews.displayItem')->with('items',warehouse::all());
    }
    //get Item description
    public function getDetails($id)
    {
        return view('myviews.itemView')->with('warehouse',warehouse::find($id));
    } 
}
