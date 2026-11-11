
@extends('layouts.front')
@section('content')
    <section class="py-12 bg-white border-b border-slate-200" id="categories">
            <h1 style="font-size:30px; text-align:center"> hello about page </h1>
            <h1 style="font-size:30px; text-align:center"> {{ $names}} </h1
            <!-- Display success message if available -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}    
            </div>
            @endif
            <form action="/contact" method="POST">
                    @csrf
                    <input type="text" name="name" required placeholder="Enter your name">
                    <button type="submit">Submit</button>
                </form>
    </section>
@endsection