@extends('frontend')
@section('content')
<article id="content">
    <transition>
      <router-view></router-view>
    </transition>
</article>
@endsection