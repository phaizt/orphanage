@extends('layout.frontend')
@section('title')
Help
@endsection

@section('content')
<article id="content">
      <div class="wrapper">
        <div class="box1">
          <div class="line1">
            <div class="line2 wrapper">
              <section class="col1">
                <h2><strong>M</strong>ake<span>Donations</span></h2>
                <div class="pad_bot1">
                  <figure><img src="{{ asset('fe/images/page4_img1.jpg') }}" alt=""></figure>
                </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. <a href="#" class="button1">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color2"><strong>J</strong>oin<span>Volunteer</span></h2>
                <div class="pad_bot1">
                  <figure><img src="{{ asset('fe/images/page4_img2.jpg') }}" alt=""></figure>
                </div>
                Dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.<a href="#" class="button1 color2">Read More</a> </section>
              <section class="col1 pad_left1">
                <h2 class="color3"><strong>H</strong>elp<span>Children</span></h2>
                <div class="pad_bot1">
                  <figure><img src="{{ asset('fe/images/page4_img3.jpg') }}" alt=""></figure>
                </div>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<a href="#" class="button1 color3">Read More</a> </section>
            </div>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="pad_left2">
          <h4><span>How Donations</span>Row to Communities</h4>
          <p class="pad_bot2"><strong>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa.</strong></p>
          <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis.</p>
        </div>
      </div>
      <div class="wrapper">
        <div class="box2">
          <div class="wrapper">
            <section class="col1">
              <div class="wrapper"> <a href="#" class="left marg_right1"><img src="{{ asset('fe/images/banner.jpg') }}" alt=""></a>
                <p class="pad_bot2"><strong>How Can You Donate?</strong></p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. </div>
            </section>
          </div>
        </div>
      </div>
    </article>
@endsection

@push('appjs')
<script type="text/javascript">Cufon.now();</script>
@endpush