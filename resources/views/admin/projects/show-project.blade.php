@extends('layouts.app')
    @section('content')
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-6">
                   <div class="card shadow">
                        <img class="card-img-start-fluid p-3 w-25" src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="folder">
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->name}}</h5>
                          <p class="card.text">{{ $project->description}}</p>
                          <div class="text-secondary">Data Creazione: {{ $project->start_date }}</div>
                          <div class="text-secondary">Data Fine: {{ $project->end_date }}</div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    @endsection