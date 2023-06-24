<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Carbon;
use Image;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('backend.admin.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.banner.create');
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
            'designation' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'description' => 'required',
        ]);

        if($request->hasfile('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(96,114)->save('upload/banner/'.$name_gen);
            $image = 'upload/banner/'.$name_gen;
        }else{
            $image = $request->image;
        }

        $banner = new Banner;
        $banner->name = $request->name;
        $banner->title = $request->title;
        $banner->description = $request->description;
        $banner->designation = $request->designation;

        if($request->status == Null){
            $request->status = 0;
        }
        $banner->status = $request->status;
        $banner->image = $image;
        $banner->created_at = Carbon::now();
        $banner->save();

        $notification = array(
            'message' => 'Banner Inserted Successfully.', 
            'alert-type' => 'success'
        );

        return redirect()->route('banner.index')->with($notification);
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
        $banner = Banner::find($id);
        return view('backend.admin.banner.edit', compact('banner'));
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

        $banner = Banner::find($id);

        if($request->hasfile('image')){
            try {
                if(file_exists($banner->image)){
                    unlink($banner->image);
                }
            } catch (Exception $e) {

            }
            
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(96,114)->save('upload/banner/'.$name_gen);
            $image = 'upload/banner/'.$name_gen;
        }else{
            $image = $banner->image;
        }

        $banner->title = $request->title;
        $banner->name = $request->name;
        $banner->designation = $request->designation;
        $banner->description = $request->description;


        if($request->status == Null){
            $request->status = 0;
        }
        $banner->status = $request->status;
        $banner->image = $image ;

        $banner->updated_at = Carbon::now();

        $banner->save();

        $notification = array(
            'message' => 'Banner Updated Successfully.', 
            'alert-type' => 'success'
        );

        return redirect()->route('banner.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $image = $banner->image;
        unlink($image);
        $banner->delete();

        $notification = array(
            'message' => 'Banner Deleted Successfully.', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function active($id){

        $banner = Banner::find($id);
        $banner->status = 1;
        $banner->save();

        $notification = array(
            'message' => 'Banner Active Successfully.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function inactive($id){
        $banner = Banner::find($id);
        $banner->status = 0;
        $banner->save();

        $notification = array(
            'message' => 'Banner Disabled Successfully.', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function view($id){
        $banner = Banner::find($id);
        return view('backend.admin.banner.view', compact('banner'));
    }
}
