@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row row-gap-3">
            <div class="col-12 p-3">
                <h1>POJECTS</h1>
            </div>
            @foreach ($projects as $project)
                <div class="col-3">
                    <div class="card shadow h-100">
                        <img class="card-img-top p-3" src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="folder">
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->name}}</h5>
                          <p class="card-text">{{ $project->desription }}</p>
                          <span class="text-secondary">Data Creazione: {{ $project->start_date }}</span>
                          <span class="text-secondary">Data Fine: {{ $project->end_date }}</span>
                          <div class="">
                            <a href="{{ route('admin.project.show')}}" class="btn btn-warning">Visualizza</a>
                          </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection