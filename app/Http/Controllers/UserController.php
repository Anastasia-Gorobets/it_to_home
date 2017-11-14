<?php
namespace App\Http\Controllers;
use App\Teacher;
use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    function __construct()
    {
       $this->middleware(['auth','setVar','checkAuthIdForPage']);
    }

    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()

    {




    }



    public function favorites(Request $request,$userId){


        $teachers = User::findOrFail($userId)->favorites;

        return view('teachers.all', compact('teachers'));
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