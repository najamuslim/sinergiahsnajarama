<?php

namespace App\Http\Controllers;
use App\Content;
use Illuminate\Http\Request;

class CKEditorController extends Controller
{
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image successfully uploaded'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function storeContent(Request $request) {
      $input_data = $request->all();
      $content = new Content();    
      $content->title = $input_data['title'];
      $content->short_description = $input_data['short_description'];
      $content->long_description = $input_data['wysiwyg-editor'];
      $content->category = $input_data['category'];
      $content->save();
      return back()->with('success', 'Your form has been submitted.');
    }

    public function showContent(Request $request, $id){
      $content = Content::where('id',$id)->first();
      return view('pages/show-content', compact('content'));
    }
}