<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Client;
use App\Models\Service;
use App\Models\Category;
use App\Models\Project;
use App\Models\Promo;
use App\Models\Manager;
use App\Models\Employee;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }


    //SHOW THE DASHBOARD

    public function index()
    {
        return view('admin.dashboard');
    }

    ####################################

    // ADMIN PAGE

    public function showAdmins()
    {
        $admins = User::where('role_as', 1)->get();
        return view('admin.admins')->with('admins', $admins);
    }

    public function adminsCreate()
    {
        return view('admin.addAdmin');
    }

    public function adminsStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'profile_img' => 'required|image',
        ]);

        $profile_img = $request->profile_img;
        $newimg = time() . $profile_img->getClientOriginalName();
        $profile_img->move('uploads/admins/', $newimg);

        $admins = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_img' => 'uploads/admins/' . $newimg,
            'role_as' => '1',

        ]);

        $admins->save();
        return redirect()->back();
    }

    public function adminDestroy($id)
    {
        $admins = User::find($id);
        $admins->delete();

        return redirect()->back();
    }

    ####################################

    // MANAGER PAGE

    public function showManagers()
    {
        $managers = Manager::get();
        return view('admin.managers')->with('managers', $managers);
    }

    public function managersCreate()
    {
        return view('admin.addManager');
    }

    public function managersStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'profile_img' => 'required|image',
        ]);

        $profile_img = $request->profile_img;
        $newimg = time() . $profile_img->getClientOriginalName();
        $profile_img->move('uploads/managers/', $newimg);

        $managers = Manager::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_img' => 'uploads/managers/' . $newimg,


        ]);

        $managers->save();
        return redirect()->back();
    }

    public function managerDestroy($id)
    {
        $managers = Manager::find($id);
        $managers->delete();

        return redirect()->back();
    }

    ####################################

    // EMPLOYEES PAGE

    // public function showEmployees()
    // {
    //     $employees = Employee::paginate(10);
    //     return view('admin.employee')->with('employees', $employees);
    // }


    // public function employeesCreate()
    // {
    //     return view('admin.addEmployee');
    // }

    // public function employeeStore(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:8',
    //         'profile_img' => 'required|image',
    //     ]);

    //     $profile_img = $request->profile_img;
    //     $newimg = time() . $profile_img->getClientOriginalName();
    //     $profile_img->move('uploads/employees/', $newimg);

    //     $employees = Employee::create([

    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'profile_img' => 'uploads/employees/' . $newimg,


    //     ]);

    //     $employees->save();
    //     return redirect()->back();
    // }

    // public function employeeDestroy($id)
    // {
    //     $employees = Employee::find($id);
    //     $employees->delete();

    //     return redirect()->back();
    // }

    ####################################

    // CLIENTS PAGE

    public function showClients()
    {
        $clients = Client::paginate(10);
        return view('admin.client')->with('clients', $clients);
    }

    public function clientsCreate()
    {
        return view('admin.addClient');
    }

    public function clientStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone_number' => 'required|max:8',
            'email' => 'required|email',
            'img' => 'required|image',
        ]);

        $img = $request->img;
        $newimg = time() . $img->getClientOriginalName();
        $img->move('uploads/clients/', $newimg);


        $clients = Client::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'img' => 'uploads/clients/' . $newimg,

        ]);

        return redirect()->back();
    }

    public function clientDestroy($id)
    {
        $clients = Client::find($id);
        $clients->delete();
        return redirect()->back();
    }

    ####################################

    // MEDIA SERVICES PAGE

    public function mediaServices()
    {
        $categories = Category::where('service_id', '4')->get();
        return view('admin.mediaServices')->with('categories', $categories);
    }

    public function mediaServiceCreate()
    {
        return view('admin.addMediaService');
    }

    public function mediaServiceStore(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
            'img1' => 'required|image',
            'img2' => 'required|image',
            'img3' => 'required|image',
            'img4' => 'required|image',
        ]);

        $img1 = $request->img1;
        $newimg1 = time() . $img1->getClientOriginalName();
        $img1->move('uploads/mediaservices/', $newimg1);

        $img2 = $request->img2;
        $newimg2 = time() . $img2->getClientOriginalName();
        $img2->move('uploads/mediaservices/', $newimg2);

        $img3 = $request->img3;
        $newimg3 = time() . $img3->getClientOriginalName();
        $img3->move('uploads/mediaservices/', $newimg3);

        $img4 = $request->img4;
        $newimg4 = time() . $img4->getClientOriginalName();
        $img4->move('uploads/mediaservices/', $newimg4);


        $categories = Category::create([
            'category_name' => $request->category_name,
            'service_id' => 4,
            'category_description' => $request->category_description,
            'img1' => 'uploads/mediaservices/' . $newimg1,
            'img2' => 'uploads/mediaservices/' . $newimg2,
            'img3' => 'uploads/mediaservices/' . $newimg3,
            'img4' => 'uploads/mediaservices/' . $newimg4,

        ]);

        return redirect()->back();
    }

    public function mediaServicesEdit($id)
    {
        $categories = Category::find($id);
        return view('admin.mediaServicesEdit')->with('categories', $categories);
    }

    public function mediaServicesUpdate(Request $request, $id)
    {
        $categories = Category::find($id);


        if ($request->hasFile('img1')) {
            $destination = 'uploads/mediaservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img1');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/mediaservices/', $newimg);
            $categories->img1 = 'uploads/mediaservices/' . $newimg;
        }

        if ($request->hasFile('img2')) {
            $destination = 'uploads/mediaservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img2');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/mediaservices/', $newimg);
            $categories->img2 = 'uploads/mediaservices/' . $newimg;
        }

        if ($request->hasFile('img3')) {
            $destination = 'uploads/mediaservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img3');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/mediaservices/', $newimg);
            $categories->img3 = 'uploads/mediaservices/' . $newimg;
        }

        if ($request->hasFile('img4')) {
            $destination = 'uploads/mediaservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img4');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/mediaservices/', $newimg);
            $categories->img4 = 'uploads/mediaservices/' . $newimg;
        }

        if ($request->has('category_name')) {
            $categories->category_name = $request->category_name;
        }

        if ($request->has('category_description')) {
            $categories->category_description = $request->category_description;
        }

        $categories->update();

        return redirect()->route('mediaServices')->with('message', 'Service updated successfully');
    }

    public function mediaServiceDestroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->back();
    }
    ####################################

    // DEVELOPMENT SERVICES PAGE

    public function developmentServices()
    {
        $categories = Category::where('service_id', '1')->get();
        return view('admin.developmentServices')->with('categories', $categories);
    }

    public function developmentServiceCreate()
    {
        return view('admin.adddevelopmentService');
    }

    public function developmentServiceStore(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
            'img1' => 'required|image',
            'img2' => 'required|image',
            'img3' => 'required|image',
            'img4' => 'required|image',
        ]);

        $img1 = $request->img1;
        $newimg1 = time() . $img1->getClientOriginalName();
        $img1->move('uploads/developmentservices/', $newimg1);

        $img2 = $request->img2;
        $newimg2 = time() . $img2->getClientOriginalName();
        $img2->move('uploads/developmentservices/', $newimg2);

        $img3 = $request->img3;
        $newimg3 = time() . $img3->getClientOriginalName();
        $img3->move('uploads/developmentservices/', $newimg3);

        $img4 = $request->img4;
        $newimg4 = time() . $img4->getClientOriginalName();
        $img4->move('uploads/developmentservices/', $newimg4);


        $categories = Category::create([
            'category_name' => $request->category_name,
            'service_id' => 1,
            'category_description' => $request->category_description,
            'img1' => 'uploads/developmentservices/' . $newimg1,
            'img2' => 'uploads/developmentservices/' . $newimg2,
            'img3' => 'uploads/developmentservices/' . $newimg3,
            'img4' => 'uploads/developmentservices/' . $newimg4,

        ]);

        return redirect()->back();
    }

    public function developmentServicesEdit($id)
    {
        $categories = Category::find($id);
        return view('admin.developmentServicesEdit')->with('categories', $categories);
    }

    public function developmentServicesUpdate(Request $request, $id)
    {
        $categories = Category::find($id);


        if ($request->hasFile('img1')) {
            $destination = 'uploads/developmentservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img1');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/developmentservices/', $newimg);
            $categories->img1 = 'uploads/developmentservices/' . $newimg;
        }

        if ($request->hasFile('img2')) {
            $destination = 'uploads/developmentservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img2');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/developmentservices/', $newimg);
            $categories->img2 = 'uploads/developmentservices/' . $newimg;
        }

        if ($request->hasFile('img3')) {
            $destination = 'uploads/developmentservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img3');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/developmentservices/', $newimg);
            $categories->img3 = 'uploads/developmentservices/' . $newimg;
        }

        if ($request->hasFile('img4')) {
            $destination = 'uploads/developmentservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img4');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/developmentservices/', $newimg);
            $categories->img4 = 'uploads/developmentservices/' . $newimg;
        }

        if ($request->has('category_name')) {
            $categories->category_name = $request->category_name;
        }

        if ($request->has('category_description')) {
            $categories->category_description = $request->category_description;
        }

        $categories->update();

        return redirect()->route('developmentServices')->with('message', 'Service updated successfully');
    }

    public function developmentServiceDestroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->back();
    }

    ####################################

    // DESIGN SERVICES PAGE

    public function designServices()
    {
        $categories = Category::where('service_id', '2')->get();
        return view('admin.designServices')->with('categories', $categories);
    }

    public function designServiceCreate()
    {
        return view('admin.addDesignService');
    }

    public function designServiceStore(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
            'img1' => 'required|image',
            'img2' => 'required|image',
            'img3' => 'required|image',
            'img4' => 'required|image',
        ]);

        $img1 = $request->img1;
        $newimg1 = time() . $img1->getClientOriginalName();
        $img1->move('uploads/designservices/', $newimg1);

        $img2 = $request->img2;
        $newimg2 = time() . $img2->getClientOriginalName();
        $img2->move('uploads/designservices/', $newimg2);

        $img3 = $request->img3;
        $newimg3 = time() . $img3->getClientOriginalName();
        $img3->move('uploads/designservices/', $newimg3);

        $img4 = $request->img4;
        $newimg4 = time() . $img4->getClientOriginalName();
        $img4->move('uploads/designservices/', $newimg4);


        $categories = Category::create([
            'category_name' => $request->category_name,
            'service_id' => 2,
            'category_description' => $request->category_description,
            'img1' => 'uploads/designservices/' . $newimg1,
            'img2' => 'uploads/designservices/' . $newimg2,
            'img3' => 'uploads/designservices/' . $newimg3,
            'img4' => 'uploads/designservices/' . $newimg4,

        ]);

        return redirect()->back();
    }

    public function designServicesEdit($id)
    {
        $categories = Category::find($id);
        return view('admin.designServicesEdit')->with('categories', $categories);
    }

    public function designServicesUpdate(Request $request, $id)
    {
        $categories = Category::find($id);


        if ($request->hasFile('img1')) {
            $destination = 'uploads/designservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img1');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/designservices/', $newimg);
            $categories->img1 = 'uploads/designservices/' . $newimg;
        }

        if ($request->hasFile('img2')) {
            $destination = 'uploads/designservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img2');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/designservices/', $newimg);
            $categories->img2 = 'uploads/designservices/' . $newimg;
        }

        if ($request->hasFile('img3')) {
            $destination = 'uploads/designservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img3');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/designservices/', $newimg);
            $categories->img3 = 'uploads/designservices/' . $newimg;
        }

        if ($request->hasFile('img4')) {
            $destination = 'uploads/designservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img4');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/designservices/', $newimg);
            $categories->img4 = 'uploads/designservices/' . $newimg;
        }

        if ($request->has('category_name')) {
            $categories->category_name = $request->category_name;
        }

        if ($request->has('category_description')) {
            $categories->category_description = $request->category_description;
        }

        $categories->update();

        return redirect()->route('designServices')->with('message', 'Service updated successfully');
    }

    public function designServiceDestroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->back();
    }


    ####################################

    // MARKETING SERVICES PAGE

    public function marketingServices()
    {
        $categories = Category::where('service_id', '3')->get();
        return view('admin.marketingServices')->with('categories', $categories);
    }

    public function marketingServiceCreate()
    {
        return view('admin.addMarketingService');
    }

    public function marketingServiceStore(Request $request)
    {
        $this->validate($request, [
            'category_name' => 'required',
            'category_description' => 'required',
            'img1' => 'required|image',
            'img2' => 'required|image',
            'img3' => 'required|image',
            'img4' => 'required|image',
        ]);

        $img1 = $request->img1;
        $newimg1 = time() . $img1->getClientOriginalName();
        $img1->move('uploads/marketingservices/', $newimg1);

        $img2 = $request->img2;
        $newimg2 = time() . $img2->getClientOriginalName();
        $img2->move('uploads/marketingservices/', $newimg2);

        $img3 = $request->img3;
        $newimg3 = time() . $img3->getClientOriginalName();
        $img3->move('uploads/marketingservices/', $newimg3);

        $img4 = $request->img4;
        $newimg4 = time() . $img4->getClientOriginalName();
        $img4->move('uploads/marketingservices/', $newimg4);


        $categories = Category::create([
            'category_name' => $request->category_name,
            'service_id' => 3,
            'category_description' => $request->category_description,
            'img1' => 'uploads/marketingservices/' . $newimg1,
            'img2' => 'uploads/marketingservices/' . $newimg2,
            'img3' => 'uploads/marketingservices/' . $newimg3,
            'img4' => 'uploads/marketingservices/' . $newimg4,

        ]);

        return redirect()->back();
    }

    public function marketingServicesEdit($id)
    {
        $categories = Category::find($id);
        return view('admin.marketingServicesEdit')->with('categories', $categories);
    }

    public function marketingServicesUpdate(Request $request, $id)
    {
        $categories = Category::find($id);


        if ($request->hasFile('img1')) {
            $destination = 'uploads/marketingservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img1');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/marketingservices/', $newimg);
            $categories->img1 = 'uploads/marketingservices/' . $newimg;
        }

        if ($request->hasFile('img2')) {
            $destination = 'uploads/marketingservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img2');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/marketingservices/', $newimg);
            $categories->img2 = 'uploads/marketingservices/' . $newimg;
        }

        if ($request->hasFile('img3')) {
            $destination = 'uploads/marketingservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img3');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/marketingservices/', $newimg);
            $categories->img3 = 'uploads/marketingservices/' . $newimg;
        }

        if ($request->hasFile('img4')) {
            $destination = 'uploads/marketingservices/' . $categories->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img4');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/marketingservices/', $newimg);
            $categories->img4 = 'uploads/marketingservices/' . $newimg;
        }

        if ($request->has('category_name')) {
            $categories->category_name = $request->category_name;
        }

        if ($request->has('category_description')) {
            $categories->category_description = $request->category_description;
        }

        $categories->update();

        return redirect()->route('marketingServices')->with('message', 'Service updated successfully');
    }

    public function marketingServiceDestroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return redirect()->back();
    }

    ####################################

    // ProjectS PAGE

    public function projects()
    {
        $projects = Project::paginate(10);
        $clients = Client::paginate(10);
        $services = Service::paginate(10);

        return view('admin.projects')
            ->with('projects', $projects)
            ->with('clients', $clients)
            ->with('services', $services);
    }

    public function projectsCreate()
    {
        $clients = Client::all();
        $services = Service::all();
        return view('admin.addProject')
            ->with('clients', $clients)
            ->with('services', $services);
    }


    public function projectsStore(Request $request)
    {

        $this->validate($request, [
            'project_name' => 'required',
            'project_description' => 'required',
            'img' => 'required|image',
            'client_id' => 'required',
            'service_id' => 'required',
        ]);

        $img = $request->img;
        $newimg = time() . $img->getClientOriginalName();
        $img->move('uploads/projects/', $newimg);

        $projects = Project::create([
            'client_id' => $request->client_id,
            'service_id' => $request->service_id,
            'project_name' => $request->project_name,
            'project_description' => $request->project_description,
            'img' => 'uploads/projects/' . $newimg,
        ]);

        $projects->save();

        return redirect()->back();
    }

    public function projectsDestroy($id)
    {
        $projects = Project::find($id);
        $projects->delete();
        return redirect()->back();
    }

    ####################################

    // ProjectS PAGE

    public function promos()
    {
        $promos = Promo::all();

        return view('admin.promos')
            ->with('promos', $promos);
    }

    public function promosCreate()
    {
        return view('admin.addPromo');
    }


    public function promosStore(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'img' => 'required|image',
        ]);

        $img = $request->img;
        $newimg = time() . $img->getClientOriginalName();
        $img->move('uploads/promos/', $newimg);

        $promos = Promo::create([
            'title' => $request->title,
            'img' => 'uploads/promos/' . $newimg,
        ]);

        $promos->save();

        return redirect()->back();
    }

    public function promosEdit($id)
    {
        $promos = Promo::find($id);
        return view('admin.promoEdit')->with('promos', $promos);
    }

    public function promosUpdate(Request $request, $id)
    {
        $promos = Promo::find($id);


        if ($request->hasFile('img')) {
            $destination = 'uploads/promos/' . $promos->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $img = $request->file('img');
            $newimg = time() . $img->getClientOriginalName();
            $img->move('uploads/promos/', $newimg);
            $promos->img = 'uploads/promos/' . $newimg;
        }

        if ($request->has('title')) {
            $promos->title = $request->title;
        }

        $promos->update();

        return redirect()->route('promos')->with('message', 'Promo updated successfully');
    }
}
