<?php

namespace App\Http\Controllers\manager\employees;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Check_in;
use App\Models\Check_out;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use Stevebauman\Location\Facades\Location;


class EmployeesController extends Controller
{

    // public function imgtest()
    // {
    //     return view('imgtest');
    // }

    // public function testcheck()
    // {

    //     $img = $_POST['image'];
    //     $folderPath = "upload/";

    //     $fetch_imgParts = explode(";base64,", $img);
    //     $image_type_aux = explode("image/", $fetch_imgParts[0]);
    //     $image_type = $image_type_aux[1];

    //     $image_base64 = base64_decode($fetch_imgParts[1]);
    //     $img_name = uniqid() . '.png';

    //     $file = $folderPath . $img_name;
    //     // file_put_contents($file, $image_base64);

    //     $checkIn = Check_in::create([
    //         'employer_id' => 11,
    //         'emp_img' => $file,
    //     ]);

    //     $checkIn->save();

    //     return dd("uploaded successfully");
    // }


    // ##################### LOGIN 

    public function loginPage()
    {
        return view('employees.employeeRegister.login');
    }

    public function empSignInProccess(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (auth('employee')->attempt($credentials)) {

            return redirect()->route('checkInOut');
        }
        return redirect()->route('employeesLogin')->withSuccess('E-mail or Password is wrong.');
    }

    public function checkInOut()
    {
        if (auth('employee')->user()->checkedIn() && auth('employee')->user()->notCheckedOut()) {
            return view('employees.checkOut');
        } else if (auth('employee')->user()->checkedIn() && auth('employee')->user()->checkedOut()) {
            return view('employees.thanksForYourWork');
        } else if (auth('employee')->user()->notCheckedIn() && auth('employee')->user()->checkedOut()) {
            return view('employees.thanksForYourWork');
        } else if (auth('employee')->user()->notCheckedIn() && auth('employee')->user()->notCheckedOut()) {
            return view('employees.checkIn');
        }
    }

    // #################################################################################


    // ################### CHECK IN 

    public function createCheckIn(Request $request)
    {
        $this->validate($request, [
            'emp_img' => 'required|image',
        ]);

        $emp_img = $request->emp_img;
        $newimg = time() . $emp_img->getClientOriginalName();
        $emp_img->move('uploads/employees/checkInImg/', $newimg);

        $checkIn = Check_in::create([
            'employer_id' => auth('employee')->user()->id,
            'emp_img' => 'uploads/employees/checkInImg/' . $newimg,
            'reason' => $request->reason,
        ]);

        $checkIn->save();

        return redirect()->route('thanksForCheckIn');
    }

    public function thanksForCheckIn()
    {
        $checkIn = Check_in::latest()->get()->first();
        return view('employees.thanksForCheckIn')->with('checkIn', $checkIn);
    }

    // #################################################################################

    // public function createCheckOut($id)
    // {
    //     Check_out::create([
    //         'employer_id' => $id,
    //         'reason' => $request->reason,
    //     ]);

    //     return redirect()->route('thanksForCheckOut');
    // }

    public function createCheckOut(Request $request)
    {

        $checkOut = Check_out::create([
            'employer_id' => auth('employee')->user()->id,
            'reason' => $request->reason,
        ]);

        $checkOut->save();

        return redirect()->route('thanksForCheckOut');
    }

    public function thanksForCheckOut()
    {
        $checkOut = Check_out::latest()->get()->first();
        return view('employees.thanksForCheckOut')->with('checkOut', $checkOut);
    }
}
