@extends('layouts.master')
@section('title', $articles->title)
@section('content')
<div class="adtop"><a href="#" target="_blank"><img src="/uploads/banners/homepage.JPG" alt="Banner top"></a></div>
<div class="FloatLeft W680"> <strong class="link"><a href="/category/{{$articles->category->id}}">{{$articles->category->name}}</a></strong>
  <div class="newsD">
     <h1>{{ $articles->title }}</h1>
    
    <div class="intro">&nbsp;<img src="/uploads/{{ $articles->articles_image }}" alt="{{$articles->title}}"><br>
      <br>{{ $articles->body }}      
    </div>
  </div>
  <div class="bgt" style="margin-top:15px;"> <strong style="text-transform:none;">Các tin liên quan</strong> </div>
  <ul class="n_other">
    <li><a href="#">Seabank tuyển dụng vị trí Giao dịch viên tại Bắc Ninh, Hải Dương, Thái Nguyên, Vĩnh Phúc (31/07/2017)</a></li>
  </ul>
</div>
<div class="FloatLeft W309">
  <div class="bgr2"><strong>Tin mới nhất</strong></div>
  <ul class="vipr newsr1">
   @foreach($articles_new as $article_new)
    <li> <a class="img" href="/news/{{ $article_new->short_url }}/view"><img src="/uploads/{{ $article_new->articles_image }}" alt="{{$article_new->title}}"></a>
      <div class="r"> <strong><a href="/news/{{ $article_new->short_url }}/view">{{$article_new->title}}</a></strong>
        <div>{{$article_new->short_desc}}</div>
      </div>
      <div class="cl"></div>
    </li>
    @endforeach
  </ul>
  <div class="avn"></div>
  
  <div class="bgr2 mtop"><strong>Tin nổi bật</strong></div>
  <ul class="vipr newsr1">
    @foreach($articles_hot as $article_hot)
    <li><a class="img" href="/news/{{ $article_hot->short_url }}/view"><img src="/uploads/{{ $article_hot->articles_image }}" alt="MB GIA HẠN nộp hồ sơ tuyển tập trung trên toàn hệ thống 15/03"></a>
      <div class="r"> <strong><a href="/news/{{ $article_hot->short_url }}/view">{{$article_hot->title}}</a></strong>
        <div>{{$article_hot->short_desc}}</div>
      </div>
      <div class="cl"></div>
    </li>
    @endforeach 
  </ul>
</div>
@endsection