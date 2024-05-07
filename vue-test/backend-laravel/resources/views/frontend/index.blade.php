@extends('layouts.frontend.master')
@section('content')
    @include('frontend.banner')
    @include('frontend.completed_project')
    {{-- @include('frontend.why_choose') --}}
    @include('frontend.ongoing_project')
    {{-- @include('frontend.fun_fact') --}}
    @include('frontend.upcoming_project')
    {{-- @include('frontend.about') --}}
    {{-- @include('frontend.cta') --}}

    @include('frontend.why_baganbari')
    @include('frontend.dream_with_us')
    @include('frontend.our_services')
    @include('frontend.map')
    @include('frontend.contact_us')

    {{-- @include('frontend.latest_blog') --}}
    {{-- @include('frontend.subscribe') --}}
    {{-- @include('frontend.our_partner') --}}
@endsection
