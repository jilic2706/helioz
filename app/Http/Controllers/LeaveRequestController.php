<?php

namespace App\Http\Controllers;

use App\Models\LeaveRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 'hr_admin') {
            $leave_requests = LeaveRequest::latest('updated_at')->paginate(5);
            return view('leaveRequests.index')->with('leave_requests', $leave_requests);
        } else if(Auth::user()->role == 'dept_head' || Auth::user()->role == 'employee') {
            /* The idea was the the dept_head or department head had access to all of the requests within their respective department,
            not just their own. Obviously, I did not manage to accomplish this and I figured trying some more would waste too much time. */
            $leave_requests = LeaveRequest::whereBelongsTo(Auth::user())->latest('updated_at')->paginate(5);
            return view('leaveRequests.index')->with('leave_requests', $leave_requests);
        } else {
            return abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  LeaveRequest  $leave_request
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveRequest $leave_request)
    {
        if(!$leave_request->user->is(Auth::user())) {
            return abort(403);
        }

        return view('leaveRequests.show')->with('leave_request', $leave_request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
