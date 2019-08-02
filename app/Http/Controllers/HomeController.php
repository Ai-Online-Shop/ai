<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use DB;
use \Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = "cooming soon";
        $title = "cooming soon";
        $desc = "cooming soon";
        $published = "cooming soon";
        $modified = "cooming soon";
        $img_social = "cooming soon";


        $store = "cooming soon";
        $store_logo = "cooming soon";
        $author = "cooming soon";
        $author_bio = "cooming soon";
        $author_img = "cooming soon";
        $author_facebook = "cooming soon";
        $author_twitter = "cooming soon";
        $author_pinterest = "cooming soon";
        $author_linkedin = "cooming soon";
        $author_medium = "cooming soon";
        $author_phone = "cooming soon";
        $author_whatsapp = "cooming soon";

        return view('website.home', compact(
            'title',
            'desc',
            'modified',
            'published',
            'author',
            'author_bio',
            'author_img',
            'store',
            'img_social',
            'author_twitter',
            'store_logo'
        ));
    }
}
