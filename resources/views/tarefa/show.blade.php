@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $tarefa->tarefa }}</div>

                <div class="card-body">
                    <fildset desabled>
                    <div class="mb-3">
                      <label for="form_label" class="form-label">Data Limite</label>
                      <input type="date" class="form-control" value="{{ $tarefa->data_limite }}">
                    </div>
                    </fildset>
                    <a href="{{ url()->previous() }}" class="btn btn-primary">voltar</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
