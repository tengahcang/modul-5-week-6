{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link">Employee List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('employees.update',['employee' => $employee->id ]) }}" method="POST">
            @method('put')
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control @error ('firstName') is-invalid @enderror" type="text" name="firstName" id="firstName" value="{{ $errors->any() ? old('firstName') : $employee->firstname }}" placeholder="Enter First Name">
                            @error('firstName')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control @error ('lastName') is-invalid @enderror" type="text" name="lastName" id="lastName" value="{{ $errors->any() ? old('lastName') : $employee->lastname }}" placeholder="Enter Last Name">
                            @error('lastName')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control @error ('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ $errors->any() ? old('email') : $employee->email }}" placeholder="Enter Email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input class="form-control @error ('age') is-invalid @enderror" type="text" name="age" id="age" value="{{ $errors->any() ? old('age') : $employee->age }}" placeholder="Enter Age">
                            @error('age')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('position');
                                    else
                                        $selected = $employee->position_id;
                                @endphp
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ $selected == $position->id ? 'selected' : '' }} {{ old('position') == $position->id ? 'selected' : '' }}>{{ $position->code.'-'.$position->name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>
</html> --}}
@extends('layouts.app')
@section('content')
    <div class="container-sm mt-5">
        <form action="{{ route('employees.update',['employee' => $employee->id ]) }}" method="POST">
            @method('put')
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control @error ('firstName') is-invalid @enderror" type="text" name="firstName" id="firstName" value="{{ $errors->any() ? old('firstName') : $employee->firstname }}" placeholder="Enter First Name">
                            @error('firstName')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control @error ('lastName') is-invalid @enderror" type="text" name="lastName" id="lastName" value="{{ $errors->any() ? old('lastName') : $employee->lastname }}" placeholder="Enter Last Name">
                            @error('lastName')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control @error ('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ $errors->any() ? old('email') : $employee->email }}" placeholder="Enter Email">
                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input class="form-control @error ('age') is-invalid @enderror" type="text" name="age" id="age" value="{{ $errors->any() ? old('age') : $employee->age }}" placeholder="Enter Age">
                            @error('age')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-select">
                                @php
                                    $selected = "";
                                    if ($errors->any())
                                        $selected = old('position');
                                    else
                                        $selected = $employee->position_id;
                                @endphp
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}" {{ $selected == $position->id ? 'selected' : '' }} {{ old('position') == $position->id ? 'selected' : '' }}>{{ $position->code.'-'.$position->name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
