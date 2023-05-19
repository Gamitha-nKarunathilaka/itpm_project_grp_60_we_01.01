<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\CompleteProject;
use Illuminate\Http\Request;

class CompleteProjectController extends Controller
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
            $completeproject = CompleteProject::where('Problam', 'LIKE', "%$keyword%")
                ->orWhere('Solution', 'LIKE', "%$keyword%")
                ->orWhere('Risk', 'LIKE', "%$keyword%")
                ->orWhere('EstimatedPrice', 'LIKE', "%$keyword%")
                ->orWhere('EstimatedTime', 'LIKE', "%$keyword%")
                ->orWhere('Referance', 'LIKE', "%$keyword%")
                ->orWhere('Location', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $completeproject = CompleteProject::latest()->paginate($perPage);
        }

        return view('admin.complete-project.index', compact('completeproject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.complete-project.create');
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
        
        CompleteProject::create($requestData);

        return redirect('admin/complete-project')->with('flash_message', 'CompleteProject added!');
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
        $completeproject = CompleteProject::findOrFail($id);

        return view('admin.complete-project.show', compact('completeproject'));
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
        $completeproject = CompleteProject::findOrFail($id);

        return view('admin.complete-project.edit', compact('completeproject'));
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
        
        $completeproject = CompleteProject::findOrFail($id);
        $completeproject->update($requestData);

        return redirect('admin/complete-project')->with('flash_message', 'CompleteProject updated!');
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
        CompleteProject::destroy($id);

        return redirect('admin/complete-project')->with('flash_message', 'CompleteProject deleted!');
    }
}
