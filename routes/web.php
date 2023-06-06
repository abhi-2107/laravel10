<?php

use App\Models\category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'posts' => Post::with('category')->get(),
    ]);
});

Route::get('/posts/{post}',function (Post $post) {
    return view('post', [
        'post' => $post,
    ]);
});

Route::get('/categories/{category:slug}',function (Category $category){
    return view('home',[
        'posts' => $category->posts,
    ]);
});



// Route::get('/page/1', function() {
//     return view('page1',['page1Variable' => '<p>this text comes from second attribute in web.php, in page2 another method to do same task is explained</p>']);
// });
//now we can access the nextpage as $page1Variable in new-page
// As the above type of loading is hard coded we will not preffer it , so here goes the next version


// here we have used second-post.html for content, you can but it is still hard coded , so we use "slug" for flexible accessible content
// Route::get('/page/2', function() {
//     return view('page2',[
//         'page2content' => file_get_contents(__DIR__.'/../resources/posts/second-post.html')
//     ]);
// });


// find a post by its slug and pass it to a view called page3
// Route::get('/page/{page}', function($slug) {
// $path = __DIR__ . "/../resources/posts/{$slug}.html";

// if(! file_exists($path)){
//     return redirect('/');
// }


// this is how cacheing works in laravel , go to page3 and see refresh it will be cached for 5 seconds
// $page =  cache()->remember("posts.{$slug}", 5, function() use ($path){
//     var_dump("file get content cached");
//     return file_get_contents($path);
// });

// code from line43-46 and line51 results same output one with cached and other is simple output
// the below page variable simply access the slug , uncoment it and see content yourself 
// $page = file_get_contents($path);
//     return view('page3', ["page3content" => $page]);
// });

// the above method of using slug and caching is very rough coded , we can organise the code as following method ---


