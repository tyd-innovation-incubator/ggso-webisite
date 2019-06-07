<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Faqs;

class FaqsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // show all faq
    public function index()
    {

        $faqs= Faqs::latest()->get();


        return view('admin.faqs.index',compact('faqs'));
    }


    //add faq
    public function create()
    {
        return view('admin.faqs.create');
    }


    //show faq

    public function show($id)
    {

        $faq = Faqs::find($id);

        return view('admin.faqs.show',compact('faq'));
    }




    //store news
    public function store(Request $request)
    {
        //validate the news details

        $request->validate([
            'question' => 'required',
            'answer' => 'required|min:10',
        ]);

        $faq = new Faqs;

        $faq->question   =  $request['question'];
        $faq->answer =  $request['answer'];



        $faq->save();
        // set flash data with success message
        Session::flash('success', ' Successfully uploaded !');

        return redirect('/admin/faqs');
    }

    //edit faq
    public function edit($id)
    {

        $faq = Faqs::find($id);

        return view('admin.faqs.edit',compact('faq'));
    }


    //update the faq
    public function save(Request $request, $id)
    {
        $faq = Faqs::find($id);

        //validate the news details

        $request->validate([
            'question' => 'required',
            'answer' => 'required|min:20',
        ]);

        //save data to the datbase
        $faq->question = $request['question'];
        $faq->answer = $request['answer'];


        $faq->save();
        // set flash data with success message
        Session::flash('success', 'Successfully updated !');
        return redirect('/admin/faqs');
    }


    //delete faq

    public function destroy($id)
    {
        $faq = Faqs::find($id);

        $faq->delete();

        // set flash data with success message
        Session::flash('success', 'Successfully deleted !');
        return redirect('/admin/faqs');
    }
}
