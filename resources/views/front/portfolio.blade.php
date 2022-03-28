@extends('front.master')
@section('content')

  <main class="page-content">
  @include('front.breadcrumb')
    @if($Portfolio->isEmpty())

    @else
    <section class="section-50 section-sm-75 section-lg-100 bg-whisper">
      <div class="shell">
      <div  data-wow-duration="2s" data-wow-offset="200" class=" section-title text-centercell-sm-10 cell-md-5 wow fadeInUp">
            <h2 style="text-align:center" class="text-red-orange">Our Work</h2>
            
            <h3 style="text-align:center" class="text-secondary">Creative Solutions, Technical Excellence</h3>
          </div>
      </div>
    </section>
    @include('front.instagram-work')
    @endif
    <section class="section-60 section-sm-100 bg-primary">
      <div class="shell text-center text-md-left">
        <div class="range range-md-middle range-md-center">
        <?php $File = DB::table('files')->get() ?>
        @foreach($File as $file)

          <div class="cell-md-4 cell-lg-3 offset-top-30 offset-md-top-0"><a id="click-me" class="btn btn-xl btn-white-outline"> View Our Profile</a></div>
          <div class="container-popup" style="background: url('{{url('/')}}/uploads/banners/tumblr_ms92j3l63y1s1b6gto1_1280.gif') no-repeat center;" id="show">
          <div class="x">
            <div class="one"></div>
            <div class="two"></div>
          </div>
        <div class="sign-up">
          <h1>Stagepass Audio Visual</h1>
          <p style="color:#fff">Get a copy of our <strong>Business Profile.<strong></p>
          <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="{{url('/subscribe')}}" class="rd-mailform">
                <input type="text" name="email" placeholder="Enter your email address">
                <input type="submit" value="Request Profile">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
        
          
        </div>
    </div>
        @endforeach
        </div>
        
      </div>
    </section>
  
  </main>
       
  <!-- Popup -->


  <!-- Popup -->
@endsection

