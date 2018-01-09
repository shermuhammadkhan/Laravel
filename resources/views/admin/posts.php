@extends('pages.layout.master')

@section('contents')

	<table class="table">
		<caption>All Posts</caption>
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
		<!-- @foreach($posts as $post)
			<tr>
				<td>{{$post->index + 1}}</td>
				<td>{{$post->title}}</td>
				<td>{{$post->subtitle}}</td>
				<td>{{$post->slug}}</td>
				<td>{{$post->body}}</td>
				<td>{{date('Y-M-d',strtotime($post->create_at))}}</td>
				<td>Edit - Delete</td>
			</tr>
		@endforeach	 -->
		</tbody>
	</table>

@endsection()