<?php

namespace App\Http\Controllers\Api\Data\Dosen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    /**
     * Update the specified resource in storage from android.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function androidUpdate(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'phone_number' => 'required',
            'imei' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'geocode' => 'required',
            'lat_long_timestamp' => 'required'
        ]);

        if(!$validator->fails()){
            $phone_number = $request->phone_number;
            $imei = $request->imei;
            $latitude = $request->latitude;
            $longitude = $request->longitude;
            $geocode = $request->geocode;
            $timestamp = $request->lat_long_timestamp;
            if($dosen = Dosen::where('phone_number',$phone_number)->first()){
                $dosen->latitude = $latitude;
                $dosen->longitude = $longitude;
                $dosen->geocode = $geocode;
                $dosen->lat_long_timestamp = $timestamp;
                $dosen->imei = $imei;
                $dosen->save();
                return response()->json('success', 200);
            }else if($dosen = Dosen::where('imei',$imei)->first()){
                $dosen->latitude = $latitude;
                $dosen->longitude = $longitude;
                $dosen->geocode = $geocode;
                $dosen->lat_long_timestamp = $timestamp;
                $dosen->imei = $imei;
                $dosen->save();
                return response()->json('success', 200);
            }
            return response()->json('failed', 200);
        }else{
            return response()->json($validator->errors(), 400);
        }
    }

    /**
     * Update the specified resource in storage from android.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rfidUpdate(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nip' => 'required',
            'nidn' => 'required',
            'location_rfid' => 'required',
            'location_rfid_timestamp' => 'required'
        ]);
        if(!$validator->fails()){
            $nip = $request->nip;
            $nidn = $request->nidn;
            $location_rfid = $request->location_rfid;
            $location_rfid_timestamp = $request->location_rfid_timestamp;
            $dosen = Dosen::where('nip',$nip)->orWhere('nidn',$nidn)->first();
            if($dosen){
                $dosen->location_rfid = $location_rfid;
                $dosen->location_rfid_timestamp = $location_rfid_timestamp;
                $dosen->save();
                return response()->json('success', 200);
            }
            return response()->json('failed', 200);
        }else{
            return response()->json($validator->errors(), 400);
        }

    }
}
