@extends('home.layout')
@section('content')

<section id="team" class="section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h3 class="section-title">Our Team</h3>
      <span class="section-divider"></span>
      <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>
    <div class="row">
      @foreach ($team as $list)
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="pic"><img src="{{ $list['image'] }}" alt=""></div>
          <h4>{{ $list['name'] }}</h4>
          <span>{{ $list['position'] }}</span><hr>
          <p>{{ $list['bio'] }}</p>
          <div class="social">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
@endsection