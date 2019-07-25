<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\TicketFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Ticket;

class PagesController extends Controller
{
    public function contact()
    {
      return view('tickets.create');
    }

    public function index()
    {
      $tickets = Ticket::all();
      return view('tickets.allTickets', compact('tickets'));
      // alternatively, one can use
      //return view('tickets.index')->with('tickets', $tickets);
      //return view('tickets.index')->with('tickets'=>$tickets);
      //it is important to know the three methods are the same.
    }

    public function store(TicketFormRequest $request)
    {
      $Slug  = uniqid();
      $slug = Hash::make($Slug,[
        'rounds' => 12
      ]);
      $ticket= new Ticket(array(
        'title'  => $request->get('title'),
        'content'=> $request->get('content'),
        'slug'   => $slug
      ));

       $ticket->save();
       $data = array(
         'ticket'=> $slug,
       );
       Mail::send('emails.ticket', $data, function ($message) {
       $message->from('ukuejubolakelvin@gmail.com', 'Learning Laravel');
       $message->to('ukuejubolakelvin@gmail.com')->subject('There is a new ticket');
       });


       return redirect('/contact')->with('status', 'Your ticket has been created! its unique id is: ' .$Slug);
    }

    public function show($slug) {
      $ticket = Ticket::whereSlug($slug)->firstOrFail();
      $comments = $ticket->comments()->get();
      return view('tickets.show', compact('ticket', 'comments'));
    }


    public function edit($slug){
       $ticket = Ticket::whereSlug($slug)->firstOrFail();
      return view('tickets.edit', compact('ticket'));
    }

    public function update($slug, TicketFormRequest $request){
       $ticket         = Ticket::whereSlug($slug)->firstOrFail();
       $ticket->title  = $request->get('title');
       $ticket->content= $request->get('content');
       if($request->get('status') != null){
         $ticket->status = 0;
       }else{
         $ticket->status = 1;
       }
       $ticket->save();
      return redirect(action('PagesController@edit', $ticket->slug))->with('status', 'The Ticket with the Unique id, '.$slug.', has been updated successfully');
    }

    public function delete($slug){
       $ticket         = Ticket::whereSlug($slug)->firstOrFail();
       $ticket->delete();
      return redirect('/tickets')->with('status', 'The Ticket with the Unique id, '.$slug.', has been deleted');
    }







}
