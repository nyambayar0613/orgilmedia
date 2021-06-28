<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller {
    public function getHomePage() {
        $sliders = DB::table('sliders')
            ->where('is_deleted', 0)
            ->orderBy('id', 'DESC')
            ->get();

        $portfolios = DB::table('portfolio')
            ->where('is_deleted', 0)
            ->orderBy('id', 'DESC')
            ->take(5)
            ->get();

        $articles = DB::table('articles')
            ->where('is_deleted', 0)
            ->orderBy('id','DESC')
            ->take(5)
            ->get();

        return view('pages.homePage', compact('sliders', 'portfolios', 'articles'));
    }

    public function getAboutPage() {
        $staffs = DB::table('staff')
            ->where('is_deleted', 0)
            ->get();

        return view('pages.aboutPage', compact('staffs'));
    }

    public function getWorksPage() {
        return view('pages.worksPage');
    }

    public function getProjectDetail($id) {
        return view('pages.projectDetail');
    }

    public function getContactPage() {
        return view('pages.contactPage');
    }
}
