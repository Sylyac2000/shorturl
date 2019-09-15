<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortLink;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$shortLinks = ShortLink::latest()->get();

    	//var_dump($shortLinks);

    	return view('index', compact('shortLinks'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'link' => 'required|url'
        ]);
   
        $input['LINK'] = $request->link;
        $input['CODE'] = str_random(6);
        $input['ETAT'] = 1;
   
        ShortLink::create($input);
  
        return redirect('/')
             ->with('success', 'Shorten Link Generated Successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($code)
    {
        $find = Shortlink::where('CODE', $code)->first();

        //dd($find);exit;
   		if(isset($find))
        	return redirect($find->LINK);
        else
        	return redirect('/');
    }
    
     
}
