<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Manager;
use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Hash;
use Illuminate\Support\Facades\File;


class ManagerController extends Controller
{

    // ##### MANAGER LOGIN #####
    public function managerLogin()
    {
        return view('managers.auth.login');
    }

    public function processSignin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (auth('manager')->attempt($credentials)) {
            return redirect()->route('managerDashboard')
                ->withSuccess('You Have Successfully Logged-in');
        }
        return redirect()->route('managerLogin')->withSuccess('E-mail or Password is wrong.');
    }

    // --------------------------------------------------------------------------------------------

    // ##### ADD EMPLOYEE #####
    public function addEmployee()
    {
        $today = Carbon::now('GMT+2');
        return view('managers.employees.register')
            ->with('today', $today);
    }

    public function processAddEmployee(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'profile_img' => 'required|image',
        ]);

        $profile_img = $request->profile_img;
        $newimg = time() . $profile_img->getClientOriginalName();
        $profile_img->move('uploads/employees/', $newimg);

        $employees = Employee::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_img' => 'uploads/employees/' . $newimg,

        ]);

        $employees->save();
        return redirect()->route('managerDashboard')->withSuccess('An Employee Is Added Successfully');
    }

    public function allEmployees()
    {
        $emp = Employee::all();
        $today = Carbon::now('GMT+2');
        return view('managers.employees.allEmployees')
            ->with('emp', $emp)
            ->with('today', $today);
    }


    public function empProfile($id)
    {
        $emp = Employee::find($id);
        $today = Carbon::now('GMT+2');
        return view('managers.employees.profilePage')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    public function empEdit(Request $request, $id)
    {
        $emp = Employee::find($id);

        if ($request->input('password') == null) {
            $emp->password = $emp->password;
        } else $emp->password = Hash::make($request->password);



        if ($request->hasFile('profile_img')) {

            $old_img = $emp->profile_img;

            if (File::exists($old_img)) {
                File::delete($old_img);
            }

            $profile_img = $request->profile_img;
            $newimg = time() . $profile_img->getClientOriginalName();
            $profile_img->move('uploads/employees/', $newimg);

            $emp->profile_img = 'uploads/employees/' . $newimg;
        }
        $emp->update();
        return redirect()->back()->withSuccess('Employee Details Updated Successfully');
    }



    // --------------------------------------------------------------------------------------------

    // ##### MANAGER DASHBOARD #####
    public function managerDashboard()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();

        return view('managers.weeklyCheck')
            ->with('today', $today)
            ->with('todaysDay', $todaysDay)
            ->with('emp', $emp);
    }

    // --------------------------------------------------------------------------------------------

    // ##### MANAGER LOGOUT #####
    public function logout()
    {
        Session::flush();
        auth('manager')->logout();
        return Redirect()->route('managerLogin');
    }

    // --------------------------------------------------------------------------------------------

    // ##### january Check #####
    public function januaryCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.january.januaryCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }
    public function januaryShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.january.januaryShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // --------------------------------------------------------------------------------------------

    // ##### february Check #####
    public function februaryCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.february.februaryCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function februaryShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.february.februaryShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### march Check #####
    public function marchCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.march.marchCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function marchShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.march.marchShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### april Check #####
    public function aprilCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.april.aprilCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function aprilShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.april.aprilShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### may Check #####
    public function mayCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.may.mayCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function mayShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.may.mayShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### june Check #####
    public function juneCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.june.juneCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function juneShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.june.juneShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### july Check #####
    public function julyCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.july.julyCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function julyShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.july.julyShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### august Check #####
    public function augustCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.august.augustCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function augustShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.august.augustShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### september Check #####
    public function septemberCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.september.septemberCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function septemberShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.september.septemberShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### october Check #####
    public function octoberCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.october.octoberCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function octoberShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.october.octoberShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### november Check #####
    public function novemberCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.november.novemberCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function novemberShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.november.novemberShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }

    // ##### december Check #####
    public function decemberCheck()
    {
        $today = Carbon::now('GMT+2');
        $todaysDay = Carbon::now('GMT+2')->format('l');
        $emp = Employee::with('weekly_check_in', 'weekly_check_out')->get();
        return view('managers.december.decemberCheck')
            ->with('emp', $emp)
            ->with('todaysDay', $todaysDay)
            ->with('today', $today);
    }

    public function decemberShow($id)
    {

        $today = Carbon::now('GMT+2');
        $emp = Employee::where('id', $id)->first();
        return view('managers.december.decemberShow')
            ->with('emp', $emp)
            ->with('today', $today);
    }
}
