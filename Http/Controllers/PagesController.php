<?php

namespace Modules\Pages\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Pages\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('Page::index', compact('pages'));
    }

    public function view()
    {
        var_dump('pages.home', config('pages.home'));
        echo "<br>";
        var_dump('pages.error_page', config('pages.error_page'));

        echo \Location::getLocation();
    }
}
