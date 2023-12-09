@extends('layouts.app')

@section('title', 'Formulario Contacto')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-sm-start mb-2">
                    <h2><b>Formulario de contacto</b></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form method="POST" action="{{ route('contact.store') }}">
                    @include('contact.common.bodyform')
                </form>
            </div>
        </div>
    </div>
@endsection
