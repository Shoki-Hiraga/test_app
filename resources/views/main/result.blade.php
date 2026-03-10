@extends('layouts.app')

@section('content')

{{-- ===============================
Page Intro
=============================== --}}
  @include('components.intro')


  {{-- ===============================
Car Results
=============================== --}}
  @include('components.results')



{{-- ===============================
Reviews
=============================== --}}
  @include('components.reviews')


@endsection