@extends('front.master')

@section('title', 'Services')

@section('Services-active', 'active')

@section('content')


    <x-front-services-component></x-front-services-component>


    <x-front-testimonials-component></x-front-testimonials-component>


@endsection

@section('hero')
    <x-hero-component title="Services" subtitle="Services"></x-hero-component>

@endsection
