@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Selamat datang di dashboard admin!</p>
    <div class="alert alert-success" role="alert">
        You are logged in!
    </div>
@endsection

@push('scripts')
    <script>
        console.log('Dashboard script loaded!');
    </script>
@endpush