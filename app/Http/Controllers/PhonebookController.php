<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;
use Illuminate\Http\Request;

class PhonebookController extends Controller
{
    public function index(Request $request)
    {
        if($request->filled('search')){
            $search = $request->search;
            $record['record']= Phonebook::where('name','LIKE',"%$search%")->orWhere('contact',$search)->get();
        }
        else{
            $record['record']= Phonebook::all();
        }
        
        return view('home',$record);
    }

    
    public function create()
    {
      return view('insert');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'contact'=>'required',
            'image'=>'required|mimes:png,jpg',
            'email'=>'required|email',
            'address'=>'required',
        ]);
        $filename = time(). "." .$request->image->extension();
        $request->image->move(public_path('images'),$filename);
        Phonebook::create([
            'title'=>$request->title,
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'image'=>$filename,
        ]);
        $request->session()->flash('msg',"<div class='alert alert-success'>Data inserted successfully</div>");

        return redirect()->route('phonebook.index');
    }

    public function show(Phonebook $phonebook)
    {
        return view('view',['rec'=>$phonebook]);
       
    }

    public function edit(Phonebook $phonebook)
    {
        
        $data['record'] = $phonebook;
        return view('edit',$data);
    }

    public function update(Request $request, Phonebook $phonebook)
    {
        
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'contact'=>'required',
            'image'=>'required|mimes:png,jpg',
            'email'=>'required|email',
            'address'=>'required',
        ]);
        $filename = time(). "." .$request->image->extension();
        $request->image->move(public_path('images'),$filename);
        Phonebook::find($phonebook->id)->update([
            'title'=>$request->title,
            'name'=>$request->name,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'address'=>$request->address,
            'image'=>$filename,
            ]);
            $request->session()->flash('msg',"<div class='alert alert-success'>Data Updated successfully</div>");
        return redirect()->route('phonebook.index');
    }

    public function destroy(Phonebook $phonebook,Request $request)
    {
        $phonebook->delete();
        $request->session()->flash('msg',"<div class ='alert alert-danger'>Record deleted successfully</div>");
        return redirect()->route('phonebook.index');
    }
}
