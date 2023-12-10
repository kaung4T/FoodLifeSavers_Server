<?php

namespace App\Http\Controllers\Backend;

use App\Models\Earnings;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyTypeController extends Controller
{
    public function AllProduct()
    {
        $types = PropertyType::latest()->get();
        return view('backend.product.all_product', compact('types'));
    }

    public function AddProduct()
    {
        return view('backend.product.add_product');
    }

    public function StoreProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required|unique:property_types|max:200',
            'product_icon' => 'required',
        ]);

        PropertyType::insert([
            'product_name' => $request->product_name,
            'product_icon' => $request->product_icon,
        ]);

        $notification = array(
            'message' => 'Product created Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->route('all.product')->with($notification);
    }


    public function EditProduct($id)
    {
        $types = PropertyType::findOrFail($id);

        return view('backend.product.edit_product', compact('types'));
    }


    public function UpdateProduct(Request $request)
    {

        $pid = $request->id;

        PropertyType::findOrFail($pid)->update([
            'product_name' => $request->product_name,
            'product_icon' => $request->product_icon,
        ]);

        $notification = array(
            'message' => 'Product Updated Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->route('all.product')->with($notification);
    }

    public function DeleteProduct($id)
    {
        PropertyType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function AllEarning()
    {
        $earnings = Earnings::latest()->get();
        return view('backend.earnings.all_earnings', compact('earnings'));
    }

    public function AddEarning()
    {

        return view('backend.earnings.add_earnings');
    }


    public function StoreEarning(Request $request)
    {

        Earnings::insert([
            'earnings_name' => $request->earnings_name,
        ]);

        $notification = array(
            'message' => 'Earnings created Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->route('all.earnings')->with($notification);
    }

    public function EditEarning($id)
    {
        $earnings = Earnings::findOrFail($id);

        return view('backend.earnings.edit_earnings', compact('earnings'));
    }

    public function UpdateEarning(Request $request)
    {

        $earn_id = $request->id;

        Earnings::findOrFail($earn_id)->update([
            'earnings_name' => $request->earnings_name,
        ]);

        $notification = array(
            'message' => 'Earnings Updated Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->route('all.earnings')->with($notification);
    }


    public function DeleteEarning($id)
    {
        Earnings::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Earning Deleted Successfully!',
            'alert_type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
