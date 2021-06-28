<?php


namespace App\Http\Controllers\Admin;
use App\Content;
use App\Http\Controllers\Controller;
use App\Product;
use DB;
use Illuminate\Http\Request;
use App\Helper\Helper;

class ContentController extends Controller
{
    public function getContentList() {
        $contents = DB::table('contents')
            ->where('is_deleted', 0)
            ->get();

        return view('admin.contents.contentList', compact('contents'));
    }

    public function getContentAdd() {
        return view('admin.contents.contentAdd');
    }

    public function getContentEdit($id) {
        $content = DB::table('contents')
            ->where('id', $id)
            ->where('is_deleted', 0)
            ->first();
        return view('admin.contents.contentEdit', compact('content'));
    }

    /* POST */
    public function contentInsert(Request $request) {
        $content = new Content();

        $content->content_title = $request->content_title;
        $content->content_description = $request->content_description;

        if ($content->save()) {
            return redirect()->route('admin.content.list');
        }
    }

    public function contentUpdate(Request $request) {
        $content = Content::find($request->id);

        $content->content_title = $request->content_title;
        $content->content_description = $request->content_description;

        if ($content->save()) {
            return redirect()->route('admin.content.list');
        }
    }
}
