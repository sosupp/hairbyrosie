<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\HairService;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BackendHairServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = HairService::all();
        return view('dashboard.services.index', compact(
            'services',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('dashboard.services.create', compact(
            'categories',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate request

        // Get image
        $input = [];
        if(request()->hasFile('image')){
            $filename = request()->image->getClientOriginalName();
            $input['image'] = request()->file('image')->move('images', $filename);
        }

        $category = Category::find($request->category);

        $service = new HairService;
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->price = $request->price;
        $service->discount_price = $request->discount_price;
        $service->description = $request->description;
        $service->image = $request->image ? $input['image'] : '';
        $service->admin_id = auth('admin')->user()->id;

        $category->hair_services()->save($service);

        return redirect()->route('dashboard.service.index')
            ->with('success', $service->name . ' added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = HairService::find($id);
        return view('dashboard.services.show', compact(
            'service',
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = HairService::find($id);
        return view('dashboard.services.edit', compact(
            'service',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // validate request

        // Get image
        $input = [];
        if(request()->hasFile('image')){
            $filename = request()->image->getClientOriginalName();
            $input['image'] = request()->file('image')->move('images', $filename);
        }

        $category = Category::find($request->category);

        $service = HairService::find($id);
        $service->name = $request->name;
        $service->slug = Str::slug($request->name);
        $service->price = $request->price;
        $service->discount_price = $request->discount_price;
        $service->description = $request->description;

        if($request->image){

            $service->image = $input['image'];
        }

        $service->admin_id = auth('admin')->user()->id;

        $category->hair_services()->save($service);

        return redirect()->route('dashboard.service.index')
            ->with('success', $service->name . ' added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
