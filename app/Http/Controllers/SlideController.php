<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slide;
use Session;
use Carbon\Carbon;
use DB;


class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $slides= DB::table('slides')->paginate(4);
        $slides = Slide::all();
        //dd($slides);
        return view('admin.slide.index',compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      
       $request->validate([
            'link' => 'required|max:255',
            'url_img' => 'required|max:255',
            'display_order' => 'required|email',

        ],
        [
            'link.required' => 'Không được bỏ trông',
            'url_img.required' => 'Không được bỏ trống',
            'display_order.required' => 'Không được bỏ trông'
            
]);

        $slide = new Slide;
        $slide->link = $request->link;
        $slide->url_img = $request->url_img;
        $slide->display_order = $request->display_order;
        $slide->created_at = Carbon::now()->toDateTimeString();
        $slide->created_by = $request->created_by;
        $slide->updated_by = $request->updated_by;
        $slide->save();
        if ($slide){
            return redirect('/admin/slide')->with('message','Lưu Thành Công!');
        }else{
            return back()->with('err','Save error!');
        }
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.slide.show',compact('slide'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::findOrFail($id);
        return view('admin.slide.edit',compact('slide'));
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
        
        $slide = Slide::findOrFail($id);
        if (isset($slide))
        {
        $slide->link = $request->link;
        $slide->url_img = $request->url_img;
        $slide->display_order = $request->display_order;
        $slide->update();
        }else{
            return back()->with('err','Save error!');
        }
        return redirect('admin/slide
            ')->with('message','Edit successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slides = Slide::findOrFail($id);
        if ($slides){
            $slides->delete();
        }else{
            return redirect("admin/slide")->with('message','Dữ liệu đang được sử dụng bên sản phẩm!');
        }
        return redirect("admin/slide")->with('message','Xóa thành công');
    }
}
