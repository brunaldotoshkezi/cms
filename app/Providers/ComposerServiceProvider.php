<?php

namespace App\Providers;
use App\Category;
use App\Post;
use Illuminate\Support\ServiceProvider;
use App\Views\Composers\NavigationComposer;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar',NavigationComposer::class);
//        view()->composer('layouts.sidebar',function($view){
//            $categories=Category::with(['posts'=>function($query){
//                $query->published();
//            }])->orderBy('title','asc')->get();
//
//            return $view->with('categories',$categories);
//        });
//
//        view()->composer('layouts.sidebar',function($view){
//            $popularPost=Post::published()->popular()->take(3)->get();
//            return $view->with('popularPost',$popularPost);
//        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
