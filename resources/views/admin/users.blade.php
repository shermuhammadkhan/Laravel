@extends('admin.layout.master')

@section('title','Cateogry')


@section('contents')

	<button class="btn btn bg-red waves-effect pull-right" data-toggle="modal" data-target="#add_tag">
		Add new Tag
	</button>
    <br><br>
	@include('layouts.messages')
	
	<table class="table table-bordered table-hover table-responsive table-striped">
		<caption>All Tags</caption>
		<thead>
			<tr>
				<th>Sno</th>
                <th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
        @foreach($users as $user)
			<tr>
				<td>{{$loop->index +1}}</td>
                <td>{{$user->name}}</td>
				<td>
                    <a href="javascript:;" data-toggle="modal" data-target="#update_user_{{$user->id}}"> 
                        <i class="fa fa-edit"></i> 
                    </a>
                    - 
                    <a href="{{route('user_delete',$user->id)}}" onclick="return confirm('Are you sure you want to delete this record?')"> <i class="fa fa-trash"></i> </a>
                </td>
			</tr>
        @endforeach    
		</tbody>
	</table>






<div class="modal fade" id="add_tag" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Add New Tag</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
                         	{{ csrf_field() }} 
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" placeholder="Name">
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


{{-- =========================== UPDATE TAGS ================================== --}}

@foreach($users as $user)

            <div class="modal fade" id="update_tag_{{$user->id}}" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Update User</h4>
                            <hr>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="{{route('tag.update',$user->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }} 
                            {{ method_field('PATCH') }} 
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name">
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