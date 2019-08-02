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
    public function blog_single(Request $request, $blog_slug)
    {
        $post = Blog::where('slug', $blog_slug)
            ->firstOrFail();
        $id = $post->id;
        $title = $post->title;
        $desc = $post->desc;
        $coded_longtext = $post->coded_longtext;

        $published = date("d F, Y", strtotime($post->created_at));
        $modified = date("d F, Y", strtotime($post->updated_at));
        $mins_read = $post->reading_time;

        $storeoption = StoreOption::firstOrFail();
        $store = $storeoption->store;
        $store_logo = $storeoption->store_logo;
        $article_layout = $storeoption->article_layout;

        $author_id = $post->author_id;
        $a = Author::where('id', $author_id)
            ->firstOrFail();
        $author = $a->author;
        $author_des = $a->author_des;
        $author_img = $a->author_img;

        $author_facebook = $a->facebook;
        $author_twitter = $a->twitter;
        $author_pinterest = $a->pinterest;
        $author_linkedin = $a->linkedin;
        $author_medium = $a->medium;
        $author_phone = $a->phone;
        $author_whatsapp = $a->whatsapp;

        return view('blog.article.'.$article_layout, compact(
            'title',
            'id',
            'coded_longtext',
            'modified',
            'desc',
            'mins_read',
            'published',
            'author',
            'store',
            'store_logo',
            'author_des',
            'author_img',
            'author_facebook',
            'author_twitter',
            'author_pinterest',
            'author_linkedin',
            'author_medium',
            'author_whatsapp',
            'author_phone'
      ));
    }
}
