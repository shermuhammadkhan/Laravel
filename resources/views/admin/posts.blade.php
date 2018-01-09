@extends('admin.layout.master')

@section('title','Posts')

@section('page_level_header_section')

    <link href="{{ URL::asset('public/select2/select2.min.css')}}" rel="stylesheet">
  
@endsection

@section('contents')

	<button class="btn btn bg-red waves-effect pull-right" data-toggle="modal" data-target="#add_post">
		Add new Post
	</button>

	@include('layouts.messages')
	
	<table class="table table-bordered table-hover table-responsive table-striped">
		<caption>Posts</caption>
		<thead>
			<tr>
				<th>Sno</th>
                <th>Title</th>
                <th>Sub Title</th>
				<th>Slug</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->slug}}</td>
                <td>{{substr($post->body,0,60)}} @if(strlen($post->body) > 60) ....  @endif</td>
                <td>{{date('Y-M-d ( h:i a)',strtotime($post->created_at))}}</td>
                <td>
                    <a href="javascript:;" data-toggle="modal" data-target="#update_post_{{$post->id}}"> 
                        <i class="fa fa-edit"></i> 
                    </a>
                    - 
                    <a href="{{route('post_delete',$post->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"> <i class="fa fa-trash"></i> </a>
                </td>
            </tr>
        @endforeach 
		</tbody>
	</table>




<div class="modal fade" id="add_post" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="width: 136%;margin-left: -17%;">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Add Post</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                         	{{ csrf_field() }} 
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="title" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="subtitle" class="form-control" placeholder="Subtitle">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="slug" placeholder="slug" class="form-control" >
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <div class="form-line">

                                        <select name="categories" class="form-control " >
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <div class="form-line">
                                        <select name="tags" class="form-control">
                                            <option value="">Select Tags</option>
                                            @foreach($tags as $tag)
                                                <option value="{{$tag->id}}">
                                                    {{$tag->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>   


                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea class="form-control" id="editor1" name="body" cols="3" rows="4" placeholder="Post Description"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                        </div>
                      </form> 
                    </div>
                </div>
            </div>



@foreach($posts as $u_post)

<div class="modal fade" id="update_post_{{$u_post->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Update {{$u_post->title}} Post</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{route('post.update',$u_post->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            {{ method_field('PATCH') }} 
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="title" value="{{$u_post->title}}" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="subtitle" value="{{$u_post->subtitle}}" class="form-control" placeholder="Subtitle">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="slug" value="{{$u_post->slug}}" placeholder="slug" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <select name="categories" class="form-control " >
                                            <option value="">Select Category</option>
                                            @foreach($categories as $cat)
                                                <option value="{{$cat->id}}" >
                                                    {{$cat->name}}
                                                </option>
                                         
                                            @endforeach
                                        </select>
                                        </div>
                                    </div> 

                                    <div class="form-group">
                                        <div class="form-line">
                                        <select name="tags" class="form-control">
                                            <option value="">Select Tags</option>
                                            @foreach($tags as $tag)
                                                @foreach($u_post->tags as $post_tag)
                                                    <option value="{{$tag->id}}" @if($post_tag->id == $tag->id) selected @endif >
                                                        {{$tag->name}}
                                                    </option>
                                                @endforeach

                                            @endforeach
                                        </select>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea class="form-control" name="body" cols="3" rows="4" placeholder="Post Description">{{$u_post->body}}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                           

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect">SAVE</button>
                        </div>
                      </form> 
                    </div>
                </div>
            </div>


@endforeach






@endsection()            

@section('page_level_footer_section')
    <script src="{{ URL::asset('public/select2/select2.full.min.js')}}"></script>

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();


});  
</script>

@endsection    