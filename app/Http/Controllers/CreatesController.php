<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home(){
        $articles = Article::orderBy("id", "desc")->paginate(15);
        return view('home', ['articles'=>$articles]);
       
    }

    public function insert(Request $request){
       $this->validate($request, [
           'title' => 'required',
           'description' => 'required'
       ]);

       $articles = new Article;
       $articles->title = $request->input('title');
       $articles->description = $request->input('description');
       $articles->save();
       return redirect('/')->with('info', 'Data succesfully submitted');
    }

    public function update($id){
        $articles = Article::findOrFail($id);
        return view('update', ['articles'=>$articles]);
        
    }
    public function edit(Request $request, $id){
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required'
            ]);

            $data=[
                "title" => $request->input('title'),
                "description" => $request->input('description')
            ];
     
            Article::where('id', $id)->update($data);
            return redirect('/')->with('info', 'Data succesfully udated');
    }

    public function read($id){
        $articles = Article::findOrFail($id);
        return view('read', ['articles'=>$articles]);
        
    }

    public function delete($id){
        Article::where('id', $id)->delete();
        return redirect('/')->with('info', 'Detail succeffully deleted');
    }
}
