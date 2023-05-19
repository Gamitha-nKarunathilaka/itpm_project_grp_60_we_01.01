<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\CompleteProjectDetail;
use Illuminate\Http\Request;

class CompleteProjectDetailsController extends Controller
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
            $completeprojectdetails = CompleteProjectDetail::where('Problam', 'LIKE', "%$keyword%")
                ->orWhere('Solution', 'LIKE', "%$keyword%")
                ->orWhere('Risk', 'LIKE', "%$keyword%")
                ->orWhere('EstimatedPrice', 'LIKE', "%$keyword%")
                ->orWhere('EstimatedTime', 'LIKE', "%$keyword%")
                ->orWhere('Referance', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $completeprojectdetails = CompleteProjectDetail::latest()->paginate($perPage);
        }

        return view('admin.complete-project-details.index', compact('completeprojectdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.complete-project-details.create');
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
        
        CompleteProjectDetail::create($requestData);

        return redirect('admin/complete-project-details')->with('flash_message', 'CompleteProjectDetail added!');
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
        $completeprojectdetail = CompleteProjectDetail::findOrFail($id);

        return view('admin.complete-project-details.show', compact('completeprojectdetail'));
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
        $completeprojectdetail = CompleteProjectDetail::findOrFail($id);

        return view('admin.complete-project-details.edit', compact('completeprojectdetail'));
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
        
        $completeprojectdetail = CompleteProjectDetail::findOrFail($id);
        $completeprojectdetail->update($requestData);

        return redirect('admin/complete-project-details')->with('flash_message', 'CompleteProjectDetail updated!');
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
        CompleteProjectDetail::destroy($id);

        return redirect('admin/complete-project-details')->with('flash_message', 'CompleteProjectDetail deleted!');
    }
}
