@extends('app') 

@section('bg-img',asset('public/user/img/home-bg.jpg'))

@section('main-content')

asdasasasdasdasd
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
          <div class="post-preview">
            
            @foreach($post->tags as $tag)
            <a href="{{route('post',$tag->slug)}}">
              <h2 class="post-title">
                {{$post->title}}
              </h2>
            </a>  
            @endforeach  
              <h3 class="post-subtitle">
                {{$post->subtitle}}
              </h3>
            </a> 
            <p class="post-meta">Posted by user
              <a href="#"></a>
              on {{date('M d Y',strtotime($post->created_at))}}</p>
          </div>
          <hr>
          @endforeach
          <!-- Pager -->
          <ul class="pagination">
            <li class="">
              {{$posts->links()}}
            </li>
          </ul>

        </div>
      </div>
    </div>
    <hr>

@endsection    

