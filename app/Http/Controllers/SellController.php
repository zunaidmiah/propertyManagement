<?php

namespace App\Http\Controllers;

use App\sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function sellStore(Request $request)
    {
        $tmp = new sell;

        //Basic Information
        $tmp->sellTitle = $request->sellTitle;
        $tmp->Scatagory = $request->Scatagory;
        $tmp->SadditionalCatagory = $request->SadditionalCatagory;
        $tmp->Sbedrooom = $request->Sbedrooom;
        $tmp->Sbathroom = $request->Sbathroom;
        $tmp->Sbelcony = $request->Sbelcony;
        $tmp->SFloorNumber = $request->SFloorNumber;
        $tmp->SflatSize = $request->SflatSize;
        $tmp->SchooseGender = $request->SchooseGender;
        $tmp->Sprice = $request->Sprice;
        $tmp->SpriceTag = $request->SpriceTag;

        //Detailed information
        $tmp->SfloorType = $request->SfloorType;
        $tmp->SdinningSpace = $request->SdinningSpace;
        $tmp->SparkingSpace = $request->SparkingSpace;
        $tmp->SsecurityGuard = $request->SsecurityGuard;
        $tmp->Scctv = $request->Scctv;
        $tmp->Slift = $request->Slift;
        $tmp->Sgas = $request->Sgas;
        $tmp->Sdesco = $request->Sdesco;
        $tmp->Sdes = $request->Sdes;
        //$tmp->Simage = $request->Simage;

        //Pictures
        if($request->hasfile('Simage')) {
            $file = $request->file('Simage');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/sell/', $filename);
            $tmp->Simage = $filename;
        }
        /*if($request->hasFile('Simage')){
              $Simage = $request->file('Simage');
              $filename = time() . '.' . $Simage->getClientOriginalExtension();
              Image::make($Simage)->resize(300, 300)->save(storage_path('/uploads/' . $filename));
              $tmp->Simage = $filename;
        };*/
        

        //Location
        $tmp->Scity = $request->Scity;
        $tmp->Sarea = $request->Sarea;
        $tmp->Saddress = $request->Saddress;

        //Contact information
        $tmp->Sname = $request->Sname;
        $tmp->Semail = $request->Semail;
        $tmp->Snumber = $request->Snumber;
        
        $tmp->save();
        return view('sellPost');
    }
}
