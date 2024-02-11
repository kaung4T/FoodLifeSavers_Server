<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    /**
     * Logout the admin
     */
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    /**
     * Login the admin.
     */
    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    /**
     * Display the admin profile.
     */
    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    }

    /**
     * Store the admin.
     */
    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Change the admin passowrd.
     */
    public function AdminChangePassword()
    {

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    }

    /**
     * Update the admin passowrd.
     */
    public function AdminUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'required'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert_type' => 'error',
            );

            return back()->with($notification);
        };

        // Update The New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        $notification = array(
            'message' => 'Password Changed Successfully!',
            'alert_type' => 'success',
        );

        return back()->with($notification);
    }

    /**
     * Display the all admin.
     */
    public function AllAdmin()
    {
        $alladmin = User::where('role', 'admin')->get();

        return view('backend.pages.admin.all_admin', compact('alladmin'));
    }

    /**
     * Display the all user.
     */
    public function AllUser()
    {
        $alladmin = User::where('role', 'user')->get();

        return view('backend.pages.admin.all_user', compact('alladmin'));
    }

    /**
     * Display the relative admin or user by user id.
     */
    public function SingleUser(Request $request, $id)
    {
        $user = User::find($id);

        return view('backend.pages.admin.single_user', compact('user'));
    }

    /**
     * Display the relative admin or user by order id.
     */
    public function SingleUserNoti(Request $request, $id_order)
    {
        $order = Order::where('order_id', $id_order)->first();
        $user = User::find($order->user_id);

        return view('backend.pages.admin.single_user', compact('user'));
    }

    /**
     * Display the admin.
     */
    public function AddAdmin()
    {
        $roles = Role::all();

        return view('backend.pages.admin.add_admin', compact('roles'));
    }

    /**
     * Store the admin.
     */
    public function StoreAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'country' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'New Admin User Inserted Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->route('all.admin')->with($notification);
    }

    /**
     * Display the admin update.
     */
    public function EditAdmin($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('backend.pages.admin.edit_admin', compact('user', 'roles'));
    }

    /**
     * update the admin update.
     */
    public function UpdateAdmin(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->address = $request->address;
        $user->country = $request->country;
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();

        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
            'message' => 'New Admin User Updated Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->route('all.admin')->with($notification);
    }

    /**
     * Delete the admin.
     */
    public function DeleteAdmin($id)
    {
        $user = User::findOrFail($id);

        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
            'message' => 'New Admin User Deleted Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
