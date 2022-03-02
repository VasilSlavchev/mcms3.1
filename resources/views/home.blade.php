@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h1 class="text-center text-success">Welcome to mCMS 3.1 dashboard :)!</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Published posts:
            </div>
            <div class="panel-body text-success">
               <h4> {{$posts_count}}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Trashed posts:
            </div>
            <div class="panel-body text-center text-danger">
                <h4>{{$trashed_count}}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading">
                Users:
            </div>
            <div class="panel-body text-info">
            <h4>{{$users_count}}</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-3 border text-center">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                Categories:
            </div>
            <div class="panel-body text-center text-primary">
            <h4>{{$categories_count}}</h4> 
            </div>
        </div>
    </div>
    
</div>

@endsection