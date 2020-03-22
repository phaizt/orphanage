@extends('layout.frontend')
@section('title')
News
@endsection

@section('content')
<article id="content" class="tabs">
      <div class="wrapper">
        <div class="box1">
          <div class="wrapper">
            <section class="col1">
              <h2><strong>P</strong>ress<span>About Us</span></h2>
              <div class="line1">
                <figure class="left marg_right1"><img src="{{ asset('images/page3_img1.jpg') }}" alt=""></figure>
                <p class="pad_bot1"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                <p class="pad_bot2"> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur. </p>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="wrapper">
        <ul class="nav">
          <li><a href="#2003">2003</a></li>
          <li><a href="#2004">2004</a></li>
          <li><a href="#2005">2005</a></li>
          <li><a href="#2006">2006</a></li>
          <li><a href="#2007">2007</a></li>
          <li><a href="#2008">2008</a></li>
          <li><a href="#2009">2009</a></li>
          <li><a href="#2010">2010</a></li>
          <li class="selected"><a href="#2011">2011</a></li>
        </ul>
      </div>
      <div class="wrapper">
        <div class="box2">
          <div class="wrapper tab-content" id="2011">
            <section class="col1">
              <h4><span>June 31</span>2011</h4>
              <p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>June 29</span>2011</h4>
              <p class="pad_bot2"><strong>Et harum quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>June 17</span>2011</h4>
              <p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2003">
            <section class="col1">
              <h4><span>September 11</span>2003</h4>
              <p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>November 19</span>2003</h4>
              <p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>December 27</span>2003</h4>
              <p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2004">
            <section class="col1">
              <h4><span>April 13</span>2004</h4>
              <p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>May 13</span>2004</h4>
              <p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>June 21</span>2004</h4>
              <p class="pad_bot2"><strong>Ut enim ad minima unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2005">
            <section class="col1">
              <h4><span>September 11</span>2005</h4>
              <p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>November 19</span>2005</h4>
              <p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>December 27</span>2005</h4>
              <p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2006">
            <section class="col1">
              <h4><span>April 13</span>2006</h4>
              <p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>May 13</span>2006</h4>
              <p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>June 21</span>2006</h4>
              <p class="pad_bot2"><strong>Ut enim ad minima unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2007">
            <section class="col1">
              <h4><span>September 11</span>2007</h4>
              <p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>November 19</span>2007</h4>
              <p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>December 27</span>2007</h4>
              <p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4><span>September 11</span>2007</h4>
              <p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2008">
            <section class="col1">
              <h4><span>April 13</span>2008</h4>
              <p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>May 13</span>2008</h4>
              <p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
              Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. </section>
          </div>
          <div class="wrapper tab-content" id="2009">
            <section class="col1">
              <h4><span>September 11</span>2009</h4>
              <p class="pad_bot2"><strong>Ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>November 19</span>2009</h4>
              <p class="pad_bot2"><strong>Harum quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>December 27</span>2009</h4>
              <p class="pad_bot2"><strong>Perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
          <div class="wrapper tab-content" id="2010">
            <section class="col1">
              <h4><span>April 13</span>2010</h4>
              <p class="pad_bot2"><strong>Merspiciatis unde omnis occaecati cupiditate non provident</strong></p>
              <p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
              <h4 class="color2"><span>May 13</span>2010</h4>
              <p class="pad_bot2"><strong>Natus quidem rerum facilis est et expedita distinctio</strong></p>
              <p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
              <h4 class="color3"><span>June 21</span>2010</h4>
              <p class="pad_bot2"><strong>Ut enim ad minima unde omnis occaecati cupiditate non provident</strong></p>
              Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. </section>
          </div>
        </div>
      </div>
    </article>
@endsection

@push('appjs')
<script type="text/javascript">Cufon.now();</script>
@endpush