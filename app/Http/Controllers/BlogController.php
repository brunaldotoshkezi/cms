<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $limit=3;
    public function index(){
//        $categories=Category::with(['posts'=>function($query){
//            $query->published();
//        }])->orderBy('title','asc')->get();
        $posts=Post::with('author')
                    ->latestFirst()
                    ->published()
                    ->simplePaginate($this->limit);
         return view("blog.index",compact('posts'));

    }
    public function category(Category $category){
        $categoryName=$category->title;
//       $categories=Category::with(['posts'=>function($query){
//           $query->published();
//
//        }])->orderBy('title','asc')->get();
//        $posts=Post::with('author')
//                    ->latestFirst()
//                    ->published()
//                    ->where('category_id',$id)
//                    ->simplePaginate($this->limit);
//         return view("blog.index",compact('posts','categories'));

       // \DB::enableQueryLog();
        $posts=$category->posts()
                        ->with('author')
                        ->latestFirst()
                        ->published()
                        ->simplePaginate($this->limit);
        //dd(\DB::getQueryLog());
         return view("blog.index",compact('posts','categoryName'));
    }

    public function  show(Post $post){
        //first method
       //$viewCount=$post->view_count +1;
        //$post->update(['view_count'=>$viewCount]);

        //second method
        $post->increment('view_count');
        return view('blog.show',compact('post'));
    }
    public function  author(User $author){
        $authorName=$author->name;

        $posts=$author->posts()
            ->with('category')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);
        //dd(\DB::getQueryLog());
        return view("blog.index",compact('posts','authorName'));
    }
}
