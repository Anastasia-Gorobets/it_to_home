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

class TeacherController extends Controller
{

    function __construct()
    {
      $this->middleware(['setVar']);
    }

    /**
     * Show all of the message threads to the user.
     *
     * @return mixed
     */
    public function index()

    {
        //$teachers = Teacher::where([['user_id', '!=', Auth::id()]])->get();
        $teachers = Teacher::all();

        return view('teachers.all', compact('teachers'));



    }



    public function favorite(Request $request){

        //get :

       /* Auth::user()->favorites();*/
        $teacher = Teacher::find($request->get('id'));
        Auth::user()->favorites()->save($teacher);


        if ($request->isMethod('post')) {



        }


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

    public function test(){
        dd('tetszgh');
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