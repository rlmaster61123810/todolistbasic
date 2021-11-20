@extends("layout.master")
@section('titel', 'My website')
@section("content")
<h1>สร้าง Todo</h1>
{{-- create todo from simple --}}
<form action="/todo" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
@endsection
