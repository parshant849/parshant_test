@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                     <form method="POST" action="{{url('create_database')}}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="" type="text" class="form-control" name="database_name" required>
                            </div>
                        </div>
                         <button type="submit" class="btn btn-primary">Create Database</button>
                    </form>     
<br><br><br>
@foreach($databases as $database)
    <li>{{$database->name}}</li>
@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
