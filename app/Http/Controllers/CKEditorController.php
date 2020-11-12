<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
      $this->validate($request, [
        'title' => 'required',
        'short_description' => 'required',
        'wysiwyg-editor' => 'required',
        'category' => 'required',
      ]);

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

    public function getArticles(){
      $articles = DB::table('contents')
                      ->select('*')
                      ->where('category', '=', 'article')
                      ->get();

      
      return view('pages/article', ['articles'=>$articles]);
  }

  public function getNews(){
    $news = DB::table('contents')
                    ->select('*')
                    ->where('category', '=', 'news')
                    ->get();

    
    return view('pages/news', ['news'=>$news]);
  }
    public function getCareers(){
    $careers = DB::table('contents')
                    ->select('*')
                    ->where('category', '=', 'career')
                    ->get();

    
    return view('pages/career', ['careers'=>$careers]);
    }
}