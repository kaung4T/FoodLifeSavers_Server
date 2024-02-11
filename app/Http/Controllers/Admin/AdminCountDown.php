<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CountDown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCountDown extends Controller
{
    /**
     * Display the admin count-down.
     */
    public function countdown()
    {
        $cd = CountDown::all();

        $context = [
            "count_down"=> $cd,
        ];
        return view('admin.admin_count_down', $context);
    }

    /**
     * Store the admin count-down.
     */
    public function countdown_store (Request $request) {

        $cd = CountDown::all();

        // check approve from user
        if (isset($request->check_count_down)) {
            $cd->each(function ($cd) {
                $cd->approved = false;
                $cd->save();
            });

            $count_down = CountDown::create([
                'end_date' => $request->end_date,
                'user_id' => Auth::id(),
                'user' => Auth::user()->name,
                'approved' => true
            ]);
        }
        else {
            $count_down = CountDown::create([
                'end_date' => $request->end_date,
                'user_id' => Auth::id(),
                'user' => Auth::user()->name,
                'approved' => false
            ]);
        }
        
        return redirect()->route('admin.count_down')->with('success', 'End-Date added Successfully');
    }

    /**
     * Display the admin count-down update.
     */
    public function countdown_update_index (Request $request, $id) {

        $count_down = CountDown::find($id);

        $context = [
            "count_down"=>$count_down,
            "count_down_id"=>$id
        ];
        return view('admin.admin_count_down_update_index', $context);
    }

    /**
     * Update the admin count-down update.
     */
    public function countdown_update_store (Request $request, $id) {

        $count_down = CountDown::find($id);
        $cd = CountDown::all();
        
        // check approve from user
        if (isset($request->check_count_down)) {
            $cd->each(function ($cd) {
                $cd->approved = false;
                $cd->save();
            });

            $count_down_update = $count_down->update([
                'end_date' => $request->end_date,
                'user_id' => Auth::id(),
                'user' => Auth::user()->name,
                'approved' => true
            ]);
        }
        else {
            $count_down_update = $count_down->update([
                'end_date' => $request->end_date,
                'user_id' => Auth::id(),
                'user' => Auth::user()->name,
                'approved' => false
            ]);
        }
        
        return redirect()->route('admin.count_down')->with('success', 'End-Date Updated Successfully');
    }

    /**
     * Delete the admin count-down.
     */
    public function countdown_delete (Request $request, $id) {

        $count_down = CountDown::find($id);
        $count_down->delete();
        
        return redirect()->route('admin.count_down')->with('success', 'End-Date Deleted Successfully');
    }
}
