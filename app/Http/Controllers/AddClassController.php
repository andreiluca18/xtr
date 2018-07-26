<?php

namespace Xtrainers\Http\Controllers;

use Illuminate\Http\Request;

class AddClassController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function newClass( Request $request ) {

        return view('new-class');
    }

    public function handleRequest( Request $request) {
        dd($request);
    }
}
