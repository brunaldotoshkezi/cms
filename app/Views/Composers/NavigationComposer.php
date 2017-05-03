<?php
/**
 * Created by PhpStorm.
 * User: brunaldo.toshkezi
 * Date: 5/2/2017
 * Time: 4:10 PM
 */

namespace App\Views\Composers;

use Illuminate\View\View;
use App\Category;
use App\Post;


class NavigationComposer{

    public function compose(View $view){

        $this->composeCategories($view);

        $this->composePopularPosts($view);
    }

    public function composeCategories(View $view){

            $categories=Category::with(['posts'=>function($query){
                $query->published();
            }])->orderBy('title','asc')->get();

            $view->with('categories',$categories);

    }
    public function composePopularPosts(View $view){
        $popularPost=Post::published()->popular()->take(3)->get();
        $view->with('popularPost',$popularPost);
    }
}