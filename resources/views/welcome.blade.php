@extends("layout.master")
@section('titel', 'My website')
@section('content')
    <h1>หน้าแรก</h1>
    {{-- table show todolist --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>staus</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            {{-- mockup data --}}
                <tr>
                    <td>1</td>
                    <td>อาหาร</td>
                    <td>กำลังทำ</td>
                    <td>
                        <a href="#" class="btn btn-primary">edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>อาหาร</td>
                    <td>กำลังทำ</td>
                    <td>
                        <a href="#" class="btn btn-primary">edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                </tr>
        </tbody>
    </table>
    @endsection
