@extends('admin.layout.master')

@section('title','Cateogry')


@section('contents')

	<button class="btn btn bg-red waves-effect pull-right" data-toggle="modal" data-target="#add_post">
		Add new Category
	</button>

	@include('layouts.messages')
	
	<table class="table table-bordered table-hover table-responsive table-striped">
		<caption>All Categories</caption>
		<thead>
			<tr>
				<th>Sno</th>
                <th>Title</th>
				<th>Slug</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
        @foreach($categories as $category)
			<tr>
				<td>{{$loop->index + 1}}</td>
                <td>{{$category->name}}</td>
				<td>{{$category->slug}}</td>
				<td>
                    <a href="javascript:;" data-toggle="modal" 
                    data-target="#update_category_{{$category->id}}"> 
                        <i class="fa fa-edit"></i> 
                    </a>
                    - 
                    <a href="{{route('category_delete',$category->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"> <i class="fa fa-trash"></i> </a>
                </td>
			</tr>
       @endforeach     
		</tbody>
	</table>






            <div class="modal fade" id="add_post" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Add Category</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
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
                                            <input type="text" name="slug" class="form-control" placeholder="Slug of the title">
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



@foreach($categories as $cat)

    <div class="modal fade" id="update_category_{{$cat->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Add Category</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{route('category.update',$cat->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            {{ method_field('PATCH') }} 
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="title" value="{{$cat->name}}" class="form-control" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="slug" value="{{$cat->slug}}" class="form-control" placeholder="Slug of the title">
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