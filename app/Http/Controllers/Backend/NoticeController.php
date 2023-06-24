<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\NoticeMenu;
use Illuminate\Support\Carbon;
use Image;
use file;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice = Notice::latest()->get();
        return view('backend.admin.notice.index',compact('notice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notice_menu = NoticeMenu::where('status',1)->get();
        return view('backend.admin.notice.create',compact('notice_menu'));
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
            'title' => 'required',
            'pdf' => 'required',
            'notice_menus_id' => 'required',
        ]);



        $notice = new Notice;


        $notice->title = $request->title;
        $notice->notice_menus_id = $request->notice_menus_id;

        $notice->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title)));

        if($request->status == Null){
            $request->status = 0;
        }
        $notice->status = $request->status;
        $notice->created_at = Carbon::now();
        $notice->save();

        // pdf file
        if($request->file('pdf')){
            $file=$request->pdf;
            $file_ext=$file->getClientOriginalExtension();
            $file_name= 'notice-file'.date('Y-m-d-h-i-s-').rand(999,9999).'.'.$file_ext;
            $file_path=$file_name;
            $file->move(public_path().'/upload/pdf/',$file_path);
            $notice->pdf=$file_path;
            $notice->save();
        }

        $notification = array(
            'message' => 'Notice Inserted Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('notice.index')->with($notification);
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
        $notice = Notice::find($id);
        $notice_menu = NoticeMenu::where('status',1)->get();
        return view('backend.admin.notice.edit', compact('notice','notice_menu'));
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
        $notice = Notice::find($id);

        if($request->file('pdf')){

            try {
                if(file_exists($notice->pdf)){
                    unlink($notice->pdf);
                }
            } catch (Exception $e) {

            }

            $file=$request->pdf;
            $old_file=$notice->pdf;
            $file_ext=$file->getClientOriginalExtension();
            $file_name= 'notice-file-'.date('Y-m-d-h-i-s-').rand(999,9999).'.'.$file_ext;
            $file_path=$file_name;
            $file->move(public_path().'/upload/pdf/',$file_path);
            $notice->pdf=$file_path;
            $notice->save();

        }


        $notice->title = $request->title;
        $notice->notice_menus_id = $request->notice_menus_id;

        $notice->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title)));


        if($request->status == Null){
            $request->status = 0;
        }
        $notice->status = $request->status;

        $notice->updated_at = Carbon::now();

        $notice->save();

        $notification = array(
            'message' => 'Notice Updated Successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('notice.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notice = Notice::find($id);

        try {
            if(file_exists($notice->pdf)){
                unlink($notice->pdf);
            }
        } catch (Exception $e) {

        }

        $notice->delete();

        $notification = array(
            'message' => 'Notice Deleted Successfully.',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function active($id){

        $notice = Notice::find($id);
        $notice->status = 1;
        $notice->save();

        $notification = array(
            'message' => 'Notice Active Successfully.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function inactive($id){
        $notice = Notice::find($id);
        $notice->status = 0;
        $notice->save();

        $notification = array(
            'message' => 'Notice Disabled Successfully.',
            'alert-type' => 'error'
        );

        return redirect()->back()->with($notification);
    }

    public function view($id){
        $notice = Notice::find($id);
        return view('backend.admin.notice.view', compact('notice'));
    }
}
