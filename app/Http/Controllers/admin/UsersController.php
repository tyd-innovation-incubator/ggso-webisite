<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\User;
use Auth;
class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //show list of admin users
    public function index()
    {
        $admins = User::all();

        return view('admin.adminUsers.index',compact('admins'));
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    //add new admin user
    public function add()
    {
        return view('admin.adminUsers.create');
    }

    //save data of new admin user
    public function store(Request $request)
    {

        //validate the form data
        $this->validate($request, [
            'username' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'status' => 'required'
        ]);
        //save in the database
        $adminuser = new User;

        $adminuser->name = $request['username'];
        $adminuser->email = $request['email'];
        $adminuser->password = bcrypt($request['password']);
        $adminuser->role = $request['status'];

        $adminuser->save();

        // redirect to the index page
        // set flash data with success message
        Session::flash('success', 'Admin User is Successfully added ! ');

        return redirect('/admin/users');
    }

    public function edit($id)
    {
        $admin = User::find($id);

        return view('admin.adminUsers.edit',compact('admin'));
    }

    public function save(Request $request,$id)
    {

        //validate the form data
        $this->validate($request, [
            'username' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'confirmed',
            'status' => 'required'
        ]);
        //save in the database
        $adminuser = User::find($id);

        $adminuser->name = $request['username'];
        $adminuser->email = $request['email'];
        if ($request['password'] !=" " ){
            $adminuser->password = bcrypt($request['password']);
        }
        else {
            $adminuser->password = $adminuser->password;
        }
        $adminuser->role = $request['status'];

        $adminuser->save();

        // redirect to the index page
        // set flash data with success message
        Session::flash('success', 'Admin User is Successfully updated ! ');
        return redirect(route('admin_list'));
    }

    public function destroy($id)
    {
        //delete user in the database
        $user = User::find($id);

        $user->delete();


        // set flash data with success message
        Session::flash('success', 'Admin User is Successfully deleted !');
        return redirect(route('admin_list'));
    }

    //allow user to logout
    public function logout()
    {

        auth()->logout();

        return redirect('/login');

    }
}
