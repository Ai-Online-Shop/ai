<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Blog;
use App\Author;
use App\StoreOption;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $l_id = LaravelLocalization::getCurrentLocale();
        $post = Blog::where('language_code', $l_id)->where('active', 1)->get();

        return view('blog.overview', compact(
            'post'
    ));
    }

    public function blog_single(Request $request, $blog_slug)
    {
        $post = Blog::where('slug', $blog_slug)->where('active', 1)
            ->firstOrFail();
        $id = $post->id;
        $language_code = $post->language_code;
        $title = $post->title;
        $desc = $post->desc;
        $section = $post->section;
        $tags = $post->tags;

        $published = date("d F, Y", strtotime($post->created_at));
        $modified = date("d F, Y", strtotime($post->updated_at));
        $mins_read = $post->reading_time;

        $storeoption = StoreOption::firstOrFail();
        $store = $storeoption->store;
        $article_layout = $storeoption->article_layout;

        $author_id = $post->author_id;
        $a = Author::where('id', $author_id)
            ->firstOrFail();
        $author = $a->author;
        $author_des = $a->author_des;
        $author_img = $a->author_img;
        $author_twitter = $a->twitter;



        return view('blog.article.'.$article_layout, compact(
            'title',
            'id',
            'language_code',
            'section',
            'tags',
            'modified',
            'desc',
            'mins_read',
            'published',
            'author',
            'store',
            'author_des',
            'author_twitter',
            'author_img'
      ));
    }
}
