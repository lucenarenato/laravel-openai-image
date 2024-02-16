@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title text-center border-bottom mb-3">
                        <h1>AI Image Generator</h1>
                    </div>
                    <form method="POST" action="{{ route('images.generate') }}" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="description" class="form-label">Insert a description for the image</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                value="{{ old('description') }}" name="description" id="description"
                                placeholder="Example: A fox diving into the sea" autofocus required maxlength="1000">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="size" class="form-label">Select the size of the image</label>
                            <select class="form-select @error('size') is-invalid @enderror " name="size" id="size">
                                <option value="sm" @if (old('size') === 'sm') selected @endif >Small</option>
                                <option value="md" @if (old('size') === 'md') selected @endif >Medium</option>
                                <option value="lg" @if (old('size') === 'lg') selected @endif >Large</option>
                            </select>
                            @error('size')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary mt-5 mb-3 w-100">Generate image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
