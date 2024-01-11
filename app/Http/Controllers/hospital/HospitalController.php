<?php

namespace App\Http\Controllers\hospital;

use App\Http\Controllers\Controller;
use App\Models\Cells;
use App\Models\Districts;
use App\Models\Hospital;
use App\Models\Hospital_information;
use App\Models\Provinces;
use App\Models\Sectors;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HospitalController extends Controller
{

    public function index()
    {
        $list = Hospital::all();
        return response()->json([
            'success' => true,
            'data' => $list,
        ], 200);
    }

    public function show($id)
    {
        $category = Hospital::find($id);
        return response($category);
    }

    public function create(Request $request)
    {
        $list = Hospital::create(['category' => $request->category]);
        return response($list, Response::HTTP_CREATED);
    }

    public function HospitalCategory()
    {
        $categories = Hospital::latest()->get();
        return view('backend.pages.hospital_categories', compact('categories'));
    }

    public function HospitalCategoryStore(Request $request)
    {
        $category = new Hospital();
        $category->category = $request->category;
        $category->save();

        return redirect()->back();
    }
    public function HospitalCategoryEdit($id)
    {
        $category = Hospital::findOrFail($id);
        return view('backend.pages.hospital.hospital_category_edit', compact('category'));
    }
    public function HospitalCategoryEditStore(Request $request)
    {
        // dd($request);
        $category = Hospital::findOrFail($request->id);
        $category->category = $request->category;
        $category->save();
        return redirect('/hospital/categories');
    }
    public function HospitalCategoryDelete($id)
    {
        Hospital::findOrFail($id)->delete();
        return redirect('/hospital/categories');
    }

    public function AllHospitals()
    {
        $hospitals = Hospital_information::latest()->get();
        return view('backend.pages.hospital.all_hospitals', compact('hospitals'));
    }
    public function AddHospital()
    {
        $provinces = Provinces::get();
        $districts = Districts::get();
        $sectors = Sectors::get();
        $cells = Cells::get();
        $hospital_types = Hospital::get();
        return view('backend.pages.hospital.add_hospital', compact('provinces', 'districts', 'sectors', 'cells', 'hospital_types'));
    }
    public function HospitalEdit($id)
    {
        $hospital = Hospital_information::findOrFail($id);
        $provinces = Provinces::get();
        $districts = Districts::get();
        $sectors = Sectors::get();
        $cells = Cells::get();
        $hospital_types = Hospital::get();
        return view('backend.pages.hospital.edit_hospital', compact('hospital', 'provinces', 'districts', 'sectors', 'cells', 'hospital_types'));
    }
    public function HospitalEditStore(Request $request)
    {
        // dd($request);
        $hospital = Hospital_information::findOrFail($request->id);
        $hospital->name = $request->name;
        $hospital->description = $request->description;
        $hospital->phone = $request->phone;
        $hospital->email = $request->email;
        $hospital->province_id = $request->province_id;
        $hospital->district_id = $request->district_id;
        $hospital->sector_id = $request->sector_id;
        $hospital->cell_id = $request->cell_id;
        $hospital->hospital_id = $request->hospital_id;
        $hospital->save();
        return redirect('/hospital/all');
    }

    public function HospitalDelete($id)
    {
        Hospital_information::findOrFail($id)->delete();
        return redirect('/hospital/all');
    }
    public function AddNewHospital(Request $request)
    {
        $hospital = new Hospital_information();
        $hospital->name = $request->name;
        $hospital->email = $request->email;
        $hospital->phone = $request->phone;
        $hospital->description = $request->description;
        $hospital->hospital_id = $request->hospital_id;
        $hospital->province_id = $request->province_id;
        $hospital->district_id = $request->district_id;
        $hospital->sector_id = $request->sector_id;
        $hospital->cell_id = $request->cell_id;
        $hospital->save();
        return redirect('/hospital/all');
    }









    public function GetDistrict($province_id)
    {


        $dists = Districts::where('province_id', $province_id)->orderBy('districtname', 'ASC')->get();
        return json_encode($dists);
    } // End Mehtod
    public function GetSector($district_id)
    {


        $sects = Sectors::where('district_id', $district_id)->orderBy('sectorname', 'ASC')->get();
        return json_encode($sects);
    } // End Mehtod
    public function GetCell($sector_id)
    {


        $cels = Cells::where('sector_id', $sector_id)->orderBy('cellname', 'ASC')->get();
        return json_encode($cels);
    } // End Mehtod

}
