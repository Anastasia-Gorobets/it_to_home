<?php
namespace App\Http\Controllers;
use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SomeController extends Controller
{

    function __construct()
    {
        // $this->middleware(['auth','guest']);
    }

    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */

    public function testfunction(Request $request){

        if ($request->isMethod('post')){
            return response()->json(['response' => 'This is post method']);
        }

        return response()->json(['response' => 'This is get method']);
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
    public function store()
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