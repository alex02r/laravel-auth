@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Creazione di un progetto</h1>
            </div>
            <div class="col-8">
                <div class="shadow rounded p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.project.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Modifica il Titolo:</label>
                            <input type="text" class="form-control" name="name" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Modifica La descrizione:</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>
                        <div class="d-flex gap-4 mb-3">
                            <div class="">
                                <label for="start_date">Modifica data inizio</label>
                                <input type="date" class="form-control" name="start_date" id="start_date" >
                            </div>
                            <div class="">
                                <label for="end_date">Modifica data fine</label>
                                <input type="date" class="form-control" name="end_date" id="end_date">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection