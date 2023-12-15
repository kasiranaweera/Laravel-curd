<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use App\Models\Software;
use App\Models\Developer;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function SoftwareStore(Request $request)
    {
        $software = new Software();
        $software->software_name = $request->software_name;
        $software->current_version = $request->current_version;
        $software->status = 1;
        $software->save();

        return back();

    }
    public function DeveloperStore(Request $request)
    {
        $developer = new Developers();
        $developer->developer_name = $request->developer_name;
        $developer->software_id = $request->software;
        $developer->status = 1;
        $developer->save();

        return back();

    }

    public function deleteSoftware($id)
    {
        $software = Software::find($id);

        $all = Developers::where("software_id", $software->id)->get()->all();

        if ($all) {
            foreach ($all as $x) {
                $x->delete();
            }
        }

        $software->delete();

        return back();
    }

    public function editSoftware($id)
    {
        $software = Software::find($id);

        return view("edit_soft", compact("software"));
    }

    public function SoftwareUpdate(Request $request, $id)
    {
        $software = Software::find($id);

        $software->software_name = $request->software_name;
        $software->current_version = $request->current_version;

        $software->update();

        return redirect('/page1');
    }

    public function deleteDeveloper($id)
    {
        $developer = Developers::find($id);

        $developer->delete();

        return back();
    }

    public function editDeveloper($id)
    {
        $developer = Developers::leftjoin('software', 'software.id', '=', 'developers.software_id')
            ->where('developers.id', $id)
            ->select('developers.*', 'software.software_name')
            ->get()->first();

        $softwares = Software::all();


        return view("edit_deve", compact("developer", 'softwares'));
    }

    public function DeveloperUpdate(Request $request, $id)
    {
        $developer = Developers::find($id);

        $developer->developer_name = $request->developer_name;
        $developer->software_id = $request->software;

        $developer->update();

        return redirect('/page2');
    }
}
