<?php
/**
 * Created by PhpStorm.
 * User: Nastya
 * Date: 13.11.2017
 * Time: 14:49
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{

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
        Auth::user()->favorites()->attach($request['teacher_id']);
        return redirect()->back();
    }

    public function destroy(Request $request,$teacher_id){
        Auth::user()->favorites()->detach($teacher_id);
        return redirect()->back();
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