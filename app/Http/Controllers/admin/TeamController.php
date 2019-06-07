<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Storage;
use Image;
use App\Team;
class TeamController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
         // show all news
  public function index()
  {

     $teams = Team::latest();

     $teams = $teams->get();

     return view('admin.teams.index',compact('teams'));
 }


    //add news
 public function create()
 {
  return view('admin.teams.create');
}


    //show single news

public function show($id)
{

  $team = Team::find($id);

  return view('admin.teams.show',compact('team'));
}




    //store news
public function store(Request $request)
{
       //validate the news details

   $request->validate([
     'name' => 'required',
     'occupation' => 'required',
     'image' => 'required|image|max:2048',
     'facebook' => 'required|url',
     'twitter' => 'required|url',
     'linkedin' => 'required|url',
 ]);

   $team = new Team;

   $team->name   =  $request['name'];
   $team->occupation =  $request['occupation'];
   $team->facebook =  $request['facebook'];
   $team->twitter   =  $request['twitter'];
   $team->linkedin =  $request['linkedin'];

       //save the image

   if($request->hasFile('image'))
   {
      $image = $request->file('image');
      $filename = time().'.'.$image->getClientOriginalExtension();
      $location = public_path('images/teams/'.$filename);
      Image::make($image)->resize(182,182)->save($location);

      $team->image = $filename;

  }

  $team->save();
       // set flash data with success message
  Session::flash('success', ' Successfully uploaded !');

  return redirect('/admin/teams');
}

    //edit news or event content
public function edit($id)
{
   $team = Team::find($id);

   return view('admin.teams.edit',compact('team'));
}


    //update the news or event
public function save(Request $request, $id)
{
  $team = Team::find($id);

       //validate the news details

  $request->validate([
      'name' => 'required',
      'occupation' => 'required',
      'image' => 'image|max:2048',
      'facebook' => 'required|url',
      'twitter' => 'required|url',
      'linkedin' => 'required|url',
]);

       //save data to the datbase
  $team = Team::find($id);

    $team->name   =  $request['name'];
    $team->occupation =  $request['occupation'];
    $team->facebook =  $request['facebook'];
    $team->twitter   =  $request['twitter'];
    $team->linkedin =  $request['linkedin'];

       //save the image
  if($request->hasFile('image'))
  {
    $image = $request->file('image');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $location = public_path('images/teams/'.$filename);
    Image::make($image)->resize(182,182)->save($location);
         //grab the old image
    $oldFilename = $team->imageName;

         //update the database
    $team->image = $filename;

         //delete the old photo
    Storage::delete('team/'.$oldFilename);

}

$team->save();
      // set flash data with success message
Session::flash('success', 'Successfully updated !');
return redirect('/admin/teams');
}


    //delete news or events

public function destroy($id)
{
  $team = Team::find($id);

        //delete the image in the image folder
  Storage::delete('team/'.$team->imageName);


         //delete the image name in the database
  $team->delete();

        // set flash data with success message
  Session::flash('success', 'Successfully deleted !');
  return redirect('/admin/teams');
}

}
