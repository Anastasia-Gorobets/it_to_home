<?php
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 14.11.2017
 * Time: 12:38
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ErrorController extends Controller
{

    public  function  error403(){
        return view('errors.403');
    }



    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()

    {

    }


    /**
     * Shows a message thread.
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {

    }

    /**
     * Creates a new message thread.
     *
     * @return mixed
     */
    public function create()
    {

    }

    /**
     * Stores a new message thread.
     *
     * @return mixed
     */
    public function store(Request $request)
    {

    }

    public function destroy(Request $request, $teacher_id)
    {

    }

    /**
     * Adds a new message to a current thread.
     *
     * @param $id
     * @return mixed
     */
    public function update($id)
    {

    }

}




