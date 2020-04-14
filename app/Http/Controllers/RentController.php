<?php

namespace App\Http\Controllers;

use App\rent;
use Illuminate\Http\Request;

class RentController extends Controller
{

    public function rentStore(Request $request)
    {
        $tmp = new rent;

        //Basic Information
        $tmp->rentTitle = $request->rentTitle;
        $tmp->month = $request->month;
        $tmp->catagory = $request->catagory;
        $tmp->additionalCatagory = $request->additionalCatagory;
        $tmp->bedrooom = $request->bedrooom;
        $tmp->bathroom = $request->bathroom;
        $tmp->belcony = $request->belcony;
        $tmp->FloorNumber = $request->FloorNumber;
        $tmp->flatSize = $request->flatSize;
        $tmp->chooseGender = $request->chooseGender;
        $tmp->price = $request->price;
        $tmp->priceTag = $request->priceTag;

        //Detailed information
        $tmp->floorType = $request->floorType;
        $tmp->dinningSpace = $request->dinningSpace;
        $tmp->parkingSpace = $request->parkingSpace;
        $tmp->securityGuard = $request->securityGuard;
        $tmp->cctv = $request->cctv;
        $tmp->lift = $request->lift;
        $tmp->gas = $request->gas;
        $tmp->desco = $request->desco;
        $tmp->des = $request->des;
        //$tmp->image = $request->image;

        //Pictures
        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/rent/', $filename);
            $tmp->image = $filename;
        }
        /*if($request->hasFile('image')){
              $image = $request->file('image');
              $filename = time() . '.' . $image->getClientOriginalExtension();
              Image::make($image)->resize(300, 300)->save(storage_path('/uploads/' . $filename));
              $tmp->image = $filename;
        };*/
        

        //Location
        $tmp->city = $request->city;
        $tmp->area = $request->area;
        $tmp->address = $request->address;

        //Contact information
        $tmp->name = $request->name;
        $tmp->email = $request->email;
        $tmp->number = $request->number;
        
        $tmp->save();
        return view('rentPost');
    }

}
