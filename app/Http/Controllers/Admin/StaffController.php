<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Staff;
use Illuminate\Http\Request;
use DB;

class StaffController extends Controller
{
    public function getStaffList() {
        $staffs = DB::table('staff')
            ->where('is_deleted', 0)
            ->paginate(5);

        $staffCount = DB::table('staff')
            ->where('is_deleted', 0)
            ->get();

        $count = count($staffCount);

        return view('admin.staff.staffList', compact('staffs', 'count'));
    }

    public function getStaffAdd() {
        return view('admin.staff.staffAdd');
    }

    public function getStaffEdit($id) {
        $staff = DB::table('staff')
            ->where('id', $id)
            ->first();

        return view('admin.staff.staffEdit', compact('staff'));
    }

    public function staffInsert(Request $request) {
        $staff = new Staff();

        if ($request->hasFile('staff_image')) {
            $fileName = Helper::imageUploader(request()->staff_image, 'staff', 601,737,300,368);
        } else {
            $fileName = 'no_image.jpg';
        }

        $staff->staff_name = $request->staff_name;
        $staff->staff_image = $fileName;
        $staff->staff_position = $request->staff_position;

        if ($staff->save()) {
            return redirect()->route('admin.staff.list');
        }
    }

    public function staffUpdate(Request $request) {
        $staff = Staff::find($request->id);
        $oldStaffImage = $staff->staff_image;

        if ($request->hasFile('staff_image')) {
            $fileName = Helper::imageUploader(request()->staff_image, 'staff', 601,737,300,368);
        } else {
            $fileName = $oldStaffImage;
        }

        $staff->staff_name = $request->staff_name;
        $staff->staff_image = $fileName;
        $staff->staff_position = $request->staff_position;

        if ($staff->save()) {
            return redirect()->route('admin.staff.list');
        }
    }
}
