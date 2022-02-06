<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Client;
use App\Models\Promo;
use App\Models\Service;
use App\Models\Project;

use Stevebauman\Location\Facades\Location;



class SiteController extends Controller
{

    public function testloc(Request $request)
    {
        $ip = $request->ip(); /* Dynamic IP address */
        // $ip = '185.81.140.114'; /* Static IP address */
        $currentUserInfo = Location::get($ip);

        return view('testloc', compact('currentUserInfo'));
    }

    public function index()
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $categories = Category::all();

        $media = Service::where('id', 4)->get();
        $development = Service::where('id', 1)->get();
        $marketing = Service::where('id', 3)->get();
        $design = Service::where('id', 2)->get();

        $services = Service::all();

        $clients = Client::all();

        $promo1 = Promo::where('id', 11)->get();
        $promo2 = Promo::where('id', 12)->get();
        $promo3 = Promo::where('id', 13)->get();

        $projects = Project::all();

        return view('main.index')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)
            ->with('categories', $categories)

            ->with('media', $media)
            ->with('development', $development)
            ->with('marketing', $marketing)
            ->with('design', $design)

            ->with('services', $services)
            ->with('clients', $clients)
            ->with('promo1', $promo1)
            ->with('promo2', $promo2)
            ->with('promo3', $promo3)

            ->with('projects', $projects);
    }

    public function showService($id)
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $categories = Category::where('id', $id)->first();;

        return view('main.singleServicePage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)
            ->with('categories', $categories);
    }

    public function contact()
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.contactus')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices);
    }

    public function development()
    {
        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.developmentPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices);
    }

    public function design()
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.designPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices);
    }

    public function marketing()
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.marketingPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices);
    }

    public function media()
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.mediaPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices);
    }

    public function project()
    {

        $servicemedia = Service::where('id', 4)->get();
        $servicedevelopment = Service::where('id', 1)->get();
        $servicedesign = Service::where('id', 2)->get();
        $servicemarketing = Service::where('id', 3)->get();

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.ourprojects')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)

            ->with('servicemedia', $servicemedia)
            ->with('servicedevelopment', $servicedevelopment)
            ->with('servicedesign', $servicedesign)
            ->with('servicemarketing', $servicemarketing);
    }

    public function showProject($id)
    {

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $projects = Project::where('id', $id)->first();;

        return view('main.singleProjectPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)
            ->with('projects', $projects);
    }


    public function mediaProjects()
    {

        $servicemedia = Service::where('id', 4)->get();
        $servicedevelopment = Service::where('id', 1)->get();
        $servicedesign = Service::where('id', 2)->get();
        $servicemarketing = Service::where('id', 3)->get();

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $mediaProjects = Project::where('service_id', 4)->paginate(6);

        return view('main.mediaProjectsPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)

            ->with('servicemedia', $servicemedia)
            ->with('servicedevelopment', $servicedevelopment)
            ->with('servicedesign', $servicedesign)
            ->with('servicemarketing', $servicemarketing)

            ->with('mediaProjects', $mediaProjects);
    }

    public function designProjects()
    {

        $servicemedia = Service::where('id', 4)->get();
        $servicedevelopment = Service::where('id', 1)->get();
        $servicedesign = Service::where('id', 2)->get();
        $servicemarketing = Service::where('id', 3)->get();

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $designProjects = Project::where('service_id', 2)->paginate(6);

        return view('main.designProjectsPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)

            ->with('servicemedia', $servicemedia)
            ->with('servicedevelopment', $servicedevelopment)
            ->with('servicedesign', $servicedesign)
            ->with('servicemarketing', $servicemarketing)

            ->with('designProjects', $designProjects);
    }

    public function marketingProjects()
    {

        $servicemedia = Service::where('id', 4)->get();
        $servicedevelopment = Service::where('id', 1)->get();
        $servicedesign = Service::where('id', 2)->get();
        $servicemarketing = Service::where('id', 3)->get();

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $marketingProjects = Project::where('service_id', 3)->paginate(6);

        return view('main.marketingProjectsPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)

            ->with('servicemedia', $servicemedia)
            ->with('servicedevelopment', $servicedevelopment)
            ->with('servicedesign', $servicedesign)
            ->with('servicemarketing', $servicemarketing)

            ->with('marketingProjects', $marketingProjects);
    }

    public function developmentProjects()
    {

        $servicemedia = Service::where('id', 4)->get();
        $servicedevelopment = Service::where('id', 1)->get();
        $servicedesign = Service::where('id', 2)->get();
        $servicemarketing = Service::where('id', 3)->get();

        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        $developmentProjects = Project::where('service_id', 1)->paginate(6);

        return view('main.developmentProjectsPage')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices)

            ->with('servicemedia', $servicemedia)
            ->with('servicedevelopment', $servicedevelopment)
            ->with('servicedesign', $servicedesign)
            ->with('servicemarketing', $servicemarketing)

            ->with('developmentProjects', $developmentProjects);
    }


    public function services()
    {
        $mediaServices = Category::where('service_id', 4)->get();
        $developmentServices = Category::where('service_id', 1)->get();
        $marketingServices = Category::where('service_id', 3)->get();
        $designServices = Category::where('service_id', 2)->get();

        return view('main.ourservices')
            ->with('mediaServices', $mediaServices)
            ->with('developmentServices', $developmentServices)
            ->with('marketingServices', $marketingServices)
            ->with('designServices', $designServices);
    }
}
