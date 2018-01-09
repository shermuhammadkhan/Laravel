@extends('app')

@section('bg-img',URL::asset('storage/app/'.$posts[0]->image) )
@section('heading',$posts[0]->title)
@section('sub_heading',$posts[0]->subtitle)

@section('main-content')
<script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.11&appId=607738789423067';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
               <b>Created at:{{$posts[0]->created_at->diffForHumans() }}</b>
               <b class="pull-right" style="color:#9a9a9a">
               <a href="{{route('search',$posts[0]->categories[0]->slug)}}">   
                  {{$posts[0]->categories[0]->name}}
               </a>
               </b>
               <br>
               <p>{{$posts[0]->body}}</p>

                <h4>Tags:</h4>
               <p>
                 <a href="{{route('tag',$posts[0]->tags[0]->name)}}" class="btn btn-primary">{{$posts[0]->tags[0]->name}}</a>
               </p>
               Comment here from your facebook account :)
               <hr>
               <div class="fb-comments" data-href="{{Request::url()}}" data-width="700px" data-numposts="5"></div>
            
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection