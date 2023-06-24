<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Pages;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use App\Models\About;
use App\Models\Service;
use App\Models\Product;
use App\Models\Property;
use App\Models\Notice;

class FrontendController extends Controller
{
    /*=================== Start Index Methoed ===================*/
    public function index(Request $request)
    {
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();

        $home_view = 'frontend.home';
        return view($home_view, compact('categories'));
    } // end method

    /*=================== End Index Methoed ===================*/

    /*=================== Start pageAbout Methoed ===================*/
    public function pageAbout($slug){
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();
        $page = Pages::where('slug', $slug)->first();
        return view('frontend.page.index',compact('page','categories'));
    } // end method
    /*=================== end pageAbout Methoed ===================*/

    /*=================== Start pageAbout Methoed ===================*/
    public function categoryShow($slug){
        $categoryShow = Category::where('slug', $slug)->first();
        // dd($categoryShow);
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();
        return view('frontend.category.index',compact('categories','categoryShow'));
    } // end method
    /*=================== end pageAbout Methoed ===================*/

    /*=================== Start pageAbout Methoed ===================*/
    public function contactusShow(){
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();
        return view('frontend.contact.index',compact('categories'));
    } // end method
    /*=================== end pageAbout Methoed ===================*/

    /*=================== Start pageServices Methoed ===================*/
    public function pageServices($slug){
        $serviceShow = Service::where('slug', $slug)->first();
        // dd($propertyShow);
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();
        return view('frontend.services.index',compact('serviceShow','categories'));
    } // end method
    /*=================== end pageServices Methoed ===================*/

    /*=================== Start pageAbout Methoed ===================*/
    public function pageBlog($slug){
        $blogShow = Blog::where('slug', $slug)->first();
        // dd($propertyShow);
        $blogShow->view=$blogShow->view +1;
        $blogShow->save();

        $blogCategogry = BlogCategory::latest()->get();
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();
        $RecenProperty = Property::latest()->get();
        return view('frontend.blog.index',compact('blogShow','categories','blogCategogry','RecenProperty'));
    } // end method
    /*=================== end pageAbout Methoed ===================*/

     /*=================== Start pageAbout Methoed ===================*/
     public function pageSingleNotice($slug){
        $notice = Notice::where('slug', $slug)->first();
        // dd($propertyShow);
        $notice->views=$notice->views +1;
        $notice->save();
        $categories = Category::where('status',1)->orderBy('id', 'ASC')->limit(5)->get();

        return view('frontend.notice.index',compact('notice','categories'));
    } // end method
    /*=================== end pageAbout Methoed ===================*/
}
