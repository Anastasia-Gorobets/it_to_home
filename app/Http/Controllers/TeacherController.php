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
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

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
     * Shows a teacher
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);
        $teacher = $teacher->user;

        return view('teachers.show',compact('teacher'));


    }

    public function test(){



    }
    /**
     * Show a form for create new teacher
     *
     * @return mixed
     */
    public function create()
    {

    }
    /**
     * Stores a new teacher to db
     *
     * @return mixed
     */
    public function store()
    {

    }

/*
 *
 * Show the form for editing the specified teacher.
 */
    public  function  edit($id){

        $teacher = Teacher::find($id);
        $user = $teacher->user;


        return view('teachers.edit',compact('teacher','user'));



    }

    /**
     * Update the specified teacher in db
     *
     * @param $id
     * @return mixed
     */
    public function update(Request $request,$id)
    {

        //validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);



        // store
        $teacher = Teacher::find($id);
        $teacher = $teacher->user;
        $teacher->name       = $request['name'];
        $teacher->email      = $request['email'];
        $teacher->avatar_path = $request->file('avatar')->store('avatars','public');
        $teacher->save();

        // redirect
        Session::flash('message', 'Successfully updated teacher!');
        return redirect('teachers');




                /*

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name'       => 'required',
            'email'      => 'required|email',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
           $teacher = Teacher::find($id);
            $teacher = $teacher->user;
            $teacher->name       = Input::get('name');
            $teacher->email      = Input::get('email');
            $teacher->save();

            // redirect
            Session::flash('message', 'Successfully updated teacher!');
            return redirect('teachers');
        }
*/



    }

    /**
     * Remove the specified resource from db.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}