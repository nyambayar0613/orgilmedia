<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;
use DB;

class VideoController extends Controller
{
    public function getVideoList() {
        $videos =DB::table('videos')
            ->where('is_deleted', 0)
            ->get();

        return view('admin.videos.videoList', compact('videos'));
    }

    public function getVideoAdd() {
        return view('admin.videos.videoAdd');
    }

    public function getVideoEdit($id) {
        $video =DB::table('videos')
            ->where('id', $id)
            ->where('is_deleted', 0)
            ->first();

        return view('admin.videos.videoEdit', compact('video'));
    }

    /* POST */
    public function videoInsert(Request $request) {
        $video = new Video();

        $video->video_title = $request->video_title;
        $video->video_url = $request->video_url;
        $video->video_description = $request->video_title;

        if ($video->save()) {
            return redirect()->route('admin.video.list');
        }
    }

    public function videoUpdate(Request $request) {
        $video = Video::find($request->id);

        $video->video_title = $request->video_title;
        $video->video_url = $request->video_url;
        $video->video_description = $request->video_description;

        if ($video->save()) {
            return redirect()->route('admin.video.list');
        }
    }
}
