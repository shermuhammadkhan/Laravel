@extends('pages.layout.master')

@section('contents')


	<a href="javascript:;" class="btn btn-info pull-right" data-toggle="modal" data-target="#add_post">Add New Post</a>

	 <table class="table table-hover">
	    <thead>
	      <tr>
	        <th>Title</th>
	        <th>Description</th>
	        <th>Image</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>John</td>
	        <td>Doe</td>
	        <td>john@example.com</td>
	      </tr>
	      
	    </tbody>
	  </table>








<!-- Modal -->
<div id="add_post" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add new Post</h4>
      </div>
      <div class="modal-body">
        	{!! Form::open(array('route' => 'insert-post','files'=>true)) !!}
        			<input type="text" name="title" class="form-control">
        			<br>
        			<textarea class="form-control" name="description"></textarea>
        			<br>
        			<input class="form-control" name="img" type="file"></input>
        			<br>
        			<input type="submit" class="btn btn-success" value="Add Post">
        	{!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>




@endsection()