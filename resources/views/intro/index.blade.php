@extends('layouts.app')
@section('content')
<video preload="none" autoplay muted id="video">
    <source src="{{ asset('videos/opening.mp4') }}" type="video/mp4">
  </video>
@endsection