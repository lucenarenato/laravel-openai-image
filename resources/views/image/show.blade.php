@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center border-bottom mb-3">
                        <h1>AI Imagem Gerada</h1>
                    </div>
                    <img src="{{ $imageUrl }}" alt="Imagem gerada">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
