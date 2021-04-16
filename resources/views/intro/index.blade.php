@extends('layouts.app')
@section('content')
<video preload="none" autoplay muted id="video">
  <source src="{{ asset('videos/opening.mp4') }}" type="video/mp4">
</video>  
<div class="floating-action next text-center">
  <img src="{{ asset('images/icons/next.png') }}" alt="">
</div>

@endsection

@push('scripts')
    <script>
      $(document).on('click', '.next', function () { 
          window.location.href = "{{ url('/home') }}"
       })
    </script>
@endpush