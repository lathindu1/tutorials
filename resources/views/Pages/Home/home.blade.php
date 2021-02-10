@extends('Layouts.app')
@section('header')
<div class="header pb-6">
    <div class="header pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-12 col-12">
                        <h6 class="h2 text-dark d-inline-block mb-0">Home</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-block ">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ url('home') }}"><i class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Available Plays</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('content')

    <div class="row">

    </div>
    <!-- Footer -->
    @endsection
