@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            >

@unless(count($Jobs) == 0)

@foreach($Jobs as $Job)
    <x-Job-card :Job="$Job" />

@endforeach
@else
<p>No Jobs found</p>
@endunless
    </div>
@endsection