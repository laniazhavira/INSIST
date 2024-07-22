<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function activity()
    {
        return view('activity.activity');
    }

    public function attendance()
    {
        return view('attendance.attendance');
    }

    public function document()
    {
        return view('document.document');
    }

    public function tracker()
    {
        return view('tracker');
    }

    public function tasklist()
    {
        return view('activity.tasklist');
    }

    public function timelineproject()
    {
        return view('activity.timelineproject');
    }

    public function projecttable()
    {
        return view('activity.projecttable');
    }


    public function attendancelog()
    {
        return view('attendance.attendancelog');
    }

    public function attendanceoverview()
    {
        return view('attendance.attendanceoverview');
    }

    public function userattendance()
    {
        return view('attendance.userattendance');
    }
}
