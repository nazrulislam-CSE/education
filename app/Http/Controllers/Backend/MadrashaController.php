<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Madrasha;
use Illuminate\Support\Carbon;
use Image;

class MadrashaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madrasha = Madrasha::latest()->get();
        return view('backend.admin.madrasha.index',compact('madrasha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.madrasha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'title' => 'required',
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'required',
        ]);

        if($request->hasfile('icon')){
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(50,50)->save('upload/icon/'.$name_gen);
            $image = 'upload/icon/'.$name_gen;
        }else{
            $image = $request->icon;
        }

        $madrasha = new Madrasha;
        $madrasha->name = $request->name;
        $madrasha->title = $request->title;
        $madrasha->description = $request->description;

        $madrasha->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name)));

        if($request->status == Null){
            $request->status = 0;
        }
        $madrasha->status = $request->status;
        $madrasha->icon = $image;
        $madrasha->created_at = Carbon::now();
        $madrasha->save();

        $notification = array(
            'message' => 'Madrasha Information Inserted Successfully.', 
            'alert-type' => 'success'
        );

        return redirect()->route('madrasha.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $madrasha = Madrasha::find($id);
        return view('backend.admin.madrasha.edit', compact('madrasha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $madrasha = Madrasha::find($id);

        if($request->hasfile('icon')){
            try {
                if(file_exists($madrasha->icon)){
                    unlink($madrasha->icon);
                }
            } catch (Exception $e) {

            }
            
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(50,50)->save('upload/icon/'.$name_gen);
            $image = 'upload/icon/'.$name_gen;
        }else{
            $image = $madrasha->icon;
        }

        $madrasha->title = $request->title;
        $madrasha->name = $request->name;
        $madrasha->description = $request->description;

        $madrasha->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name)));


        if($request->status == Null){
            $request->status = 0;
        }
        $madrasha->status = $request->status;
        $madrasha->icon = $image;

        $madrasha->updated_at = Carbon::now();

        $madrasha->save();

        $notification = array(
            'message' => 'Madrasha Updated Successfully.', 
            'alert-type' => 'success'
        );

        return redirect()->route('madrasha.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $madrasha = Madrasha::find($id);
        $image = $madrasha->icon;
        unlink($image);
        $madrasha->delete();

        $notification = array(
            'message' => 'Madrasha Deleted Successfully.', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function active($id){

        $madrasha = Madrasha::find($id);
        $madrasha->status = 1;
        $madrasha->save();

        $notification = array(
            'message' => 'Madrasha Active Successfully.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function inactive($id){
        $madrasha = Madrasha::find($id);
        $madrasha->status = 0;
        $madrasha->save();

        $notification = array(
            'message' => 'Madrasha Disabled Successfully.', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function view($id){
        $madrasha = Madrasha::find($id);
        return view('backend.admin.madrasha.view', compact('madrasha'));
    }
}
