@extends('layouts.app')
    @section('content')
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-6">
                   <div class="card shadow">
                    <div class="card-header">
                        <div class="d-flex w-100 justify-content-end gap-2">
                            <div class="btn btn-sm btn-warning"><a href="{{ route('admin.project.edit', ['project'=>$project]) }}" class="link-dark link-underline-opacity-0">Edit</a></div>
                            <div class="btn btn-sm btn-danger"><a href="" class="link-light link-underline-opacity-0">Delete</a></div>
                        </div>
                    </div>
                        <img class="card-img-start-fluid p-3 w-25" src="https://cdn-icons-png.flaticon.com/512/3767/3767084.png" alt="folder">
                        <div class="card-body">
                          <h5 class="card-title">{{ $project->name}}</h5>
                          <p class="card-text">Slug: {{ $project->slug}}</p>
                          <p class="card-text">{{ $project->description}}</p>
                          <div class="text-secondary">Data Creazione: {{ $project->start_date }}</div>
                          <div class="text-secondary">Data Fine: {{ $project->end_date }}</div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    @endsection