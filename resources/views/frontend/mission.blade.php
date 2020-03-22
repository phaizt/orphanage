@extends('layout.frontend')
@section('title')
Mission
@endsection

@section('content')
<article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h2><strong>H</strong>ope</h2>
                <div class="pad_bot1">
                  <figure><img src="{{ asset('fe/images/page2_img1.jpg') }}" alt=""></figure>
                </div>
                Hope Center is one of free website tem- plates by TemplateMonster.com, opti- mized for 1024X768 res. <a href="#" class="button1">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>B</strong>elief</h2>
                <div class="pad_bot1">
                  <figure><img src="{{ asset('fe/images/page2_img2.jpg') }}" alt=""></figure>
                </div>
                This Hope Center Template goes with two packages – with PSD source files and without them.<a href="#" class="button1 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>H</strong>elp</h2>
                <div class="pad_bot1">
                  <figure><img src="{{ asset('fe/images/page2_img3.jpg') }}" alt=""></figure>
                </div>
                This website template has several pages:<a href="index.html" class="link1">Home</a>,<a href="mission.html" class="link1">Our Mission</a>,<a href="news.html" class="link1">News and Press</a>,<a href="help.html" class="link1">How to Help</a>,<a href="contact.html" class="link1">Contact Us</a>.<a href="#" class="button1 color3">Read More</a> </section>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="wrapper">
          <h3>Our Mission</h3>
          <p class="quot"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid- idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerci- tation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.<img src="{{ asset('fe/images/quot2.png') }}" alt=""> </p>
        </div>
        <p class="pad_left2">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident:</p>
      </div>
      <div class="wrapper">
        <div class="box2">
          <div class="wrapper">
            <section class="col1">
              <ul class="list1">
                <li><a href="#">Sed ut perspiciatis unde omnis</a></li>
                <li class="color2"><a href="#">Iste natus error sit voluptatem accus</a></li>
                <li class="color3"><a href="#">Antium doloremque totam remiam</a></li>
              </ul>
            </section>
            <section class="col1 pad_left1">
              <ul class="list1">
                <li><a href="#">Eaque ipsa quae ab illo inventore</a></li>
                <li class="color2"><a href="#">Veritatis et quasi architecto beatae</a></li>
                <li class="color3"><a href="#">Dicta sunt explicabo enim ipsam</a></li>
              </ul>
            </section>
            <section class="col1 pad_left1">
              <ul class="list1">
                <li><a href="#">Voluptatem quia voluptas sit</a></li>
                <li class="color2"><a href="#">Aspernatur aut odit aut fugit sed quia</a></li>
                <li class="color3"><a href="#">Consequuntur magni dolores eos</a></li>
              </ul>
            </section>
          </div>
        </div>
      </div>
    </article>
@endsection

@push('appjs')
<script type="text/javascript">Cufon.now();</script>
@endpush