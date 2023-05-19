<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use App\Http\Requests;

use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
         $keyword = $request->get('search');
         $perPage = 25;

         if (!empty($keyword)) {
             $administrators = Administrator::where('ProjectID', 'LIKE', "%$keyword%")
                 ->orWhere('Problem', 'LIKE', "%$keyword%")
                 ->orWhere('Solution', 'LIKE', "%$keyword%")
                 ->orWhere('Risk', 'LIKE', "%$keyword%")
                 ->latest()->paginate($perPage);
         } else {
             $administrators = Administrator::latest()->paginate($perPage);
         }

        return view('admin.administrators.index', compact('administrators'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.administrators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Administrator::create($requestData);

        return redirect('admin/administrators')->with('flash_message', 'Administrator added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $administrator = Administrator::findOrFail($id);

        return view('admin.administrators.show', compact('administrator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $administrator = Administrator::findOrFail($id);

        return view('admin.administrators.edit', compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $administrator = Administrator::findOrFail($id);
        $administrator->update($requestData);

        return redirect('admin/administrators')->with('flash_message', 'Administrator updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Administrator::destroy($id);

        return redirect('admin/administrators')->with('flash_message', 'Administrator deleted!');
    }
}
