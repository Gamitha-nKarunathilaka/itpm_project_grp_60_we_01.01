@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">CompleteProjectDetail {{ $completeprojectdetail->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/complete-project-details') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/complete-project-details/' . $completeprojectdetail->id . '/edit') }}" title="Edit CompleteProjectDetail"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/completeprojectdetails' . '/' . $completeprojectdetail->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete CompleteProjectDetail" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $completeprojectdetail->id }}</td>
                                    </tr>
                                    <tr><th> Problam </th><td> {{ $completeprojectdetail->Problam }} </td></tr><tr><th> Solution </th><td> {{ $completeprojectdetail->Solution }} </td></tr><tr><th> Risk </th><td> {{ $completeprojectdetail->Risk }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
