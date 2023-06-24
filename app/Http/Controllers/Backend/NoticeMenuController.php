<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NoticeMenu;
use Illuminate\Support\Carbon;
use Image;

class NoticeMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice_menu = NoticeMenu::latest()->get();
        return view('backend.admin.notice.menu.index',compact('notice_menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.notice.menu.create');
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
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        if($request->hasfile('icon')){
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(48,48)->save('upload/icon/'.$name_gen);
            $image = 'upload/icon/'.$name_gen;
        }else{
            $image = $request->icon;
        }

        $notice_menu = new NoticeMenu;
        $notice_menu->name = $request->name;

        $notice_menu->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name)));

        if($request->status == Null){
            $request->status = 0;
        }
        $notice_menu->status = $request->status;
        $notice_menu->icon = $image;
        $notice_menu->created_at = Carbon::now();
        $notice_menu->save();

        $notification = array(
            'message' => 'Notice Menu Inserted Successfully.', 
            'alert-type' => 'success'
        );

        return redirect()->route('notice.menu.index')->with($notification);
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
        $notice_menu = NoticeMenu::find($id);
        return view('backend.admin.notice.menu.edit', compact('notice_menu'));
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
        $notice_menu = NoticeMenu::find($id);

        if($request->hasfile('icon')){
            try {
                if(file_exists($notice_menu->icon)){
                    unlink($notice_menu->icon);
                }
            } catch (Exception $e) {

            }
            
            $image = $request->file('icon');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(48,48)->save('upload/icon/'.$name_gen);
            $image = 'upload/icon/'.$name_gen;
        }else{
            $image = $notice_menu->icon;
        }

        $notice_menu->name = $request->name;

        $notice_menu->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name)));


        if($request->status == Null){
            $request->status = 0;
        }
        $notice_menu->status = $request->status;
        $notice_menu->icon = $image;

        $notice_menu->updated_at = Carbon::now();

        $notice_menu->save();

        $notification = array(
            'message' => 'Notice Menu Updated Successfully.', 
            'alert-type' => 'success'
        );

        return redirect()->route('notice.menu.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice_menu = NoticeMenu::find($id);
        $image = $notice_menu->icon;
        unlink($image);
        $notice_menu->delete();

        $notification = array(
            'message' => 'Notice Menu Deleted Successfully.', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function active($id){

        $notice_menu = NoticeMenu::find($id);
        $notice_menu->status = 1;
        $notice_menu->save();

        $notification = array(
            'message' => 'Notice Menu Active Successfully.', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function inactive($id){
        $notice_menu = NoticeMenu::find($id);
        $notice_menu->status = 0;
        $notice_menu->save();

        $notification = array(
            'message' => 'Notice Menu Disabled Successfully.', 
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function view($id){
        $notice_menu = NoticeMenu::find($id);
        return view('backend.admin.notice.menu.view', compact('notice_menu'));
    }
}
