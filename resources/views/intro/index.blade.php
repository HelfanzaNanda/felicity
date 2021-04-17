@extends('layouts.app')
@section('content')
<style type="text/css">
	.vidcon.hori{
		width: 100vw;top:50%;transform:translateY(-50%);left: 0;
	}
	.vidcon.veri{
		width: 100vw;top: 50%;transform:translateY(-50%);left: 0;
	}

	.vidbg.hori{
		width: 100vw;bottom: 0;left: 0;
	}
	.vidbg.veri{
		height: 100vh;left: 50%;transform: translateX(-50%);top: 0;
	}
</style>
<div style="position: relative;text-align: center;overflow: hidden;height: 100vh;background: #d65244">
	<video preload="none" class="vidcon hori video" style="position: absolute;z-index: 90;">
	  <source src="" class="vidsource" type="video/mp4">
	</video>
	<video preload="none" class="vidbg video" muted="" style="position: absolute;z-index: 80;">
	  <source src="" class="vidsource" type="video/mp4">
	</video>
	<div class="floating-action next text-center">
	  <img src="{{ asset('images/icons/next.png') }}" alt="">
	</div>
</div>  

@endsection

@push('scripts')
    <script>
    	function reloadVideo(){
    		width = $(window).width();
    		height = $(window).height();
    		ratio = width/height;
    		console.log(width/height);
    		if(width>=height){
    			$('.vidcon, .vidbg').removeClass('veri');
    			$('.vidcon, .vidbg').addClass('hori');
    			if(ratio>1.6){
	    			$('.vidsource').attr('src','{{ asset('videos/Opening16x9.mp4') }}');
    			}else{
	    			$('.vidsource').attr('src','{{ asset('videos/Opening1x1.mp4') }}');
	    		}
    		}else{
    			$('.vidcon, .vidbg').removeClass('hori');
    			$('.vidcon, .vidbg').addClass('veri');
    			if(ratio>0.8){
    				$('.vidsource').attr('src','{{ asset('videos/Opening4x5.mp4') }}');
    			}else{
    				$('.vidsource').attr('src','{{ asset('videos/Opening9x16.mp4') }}');
    			}    			
    		}
    		$('.vidcon, .vidbg').each(function(){
				this.load();
				this.play();
			})
    	}
    	$(document).ready(function(){
    		reloadVideo()
    	})
      $(document).on('click', '.next', function () { 
          window.location.href = "{{ url('/home') }}"
       })
      $(window).on('resize', function () { 
      	reloadVideo();
       })
    </script>
@endpush