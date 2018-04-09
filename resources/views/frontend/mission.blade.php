@extends('frontend')
@section('content')
<article id="content">
    <transition>
      <router-view name="content"></router-view>
    </transition>
</article>
@endsection