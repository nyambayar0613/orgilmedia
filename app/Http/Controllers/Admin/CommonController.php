<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use DB;

class CommonController extends Controller
{
    public function removeAttachFile(Request $request) {
        $is_deleted = DB::table('attach_file')
            ->where('id', $request->fileId)
            ->update(['is_deleted' => 1]);

        return response()->json($is_deleted);
    }

    public function removeData(Request $request) {
        $is_removed = DB::table($request->tb_name)
            ->where('id', $request->id)
            ->update(['is_deleted' => 1]);

        return response()->json($is_removed);
    }
}
