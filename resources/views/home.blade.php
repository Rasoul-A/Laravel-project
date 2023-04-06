
@extends('layouts.master')
@section('content')
<main>
    <h3>Home page</h3>
    <p>This is the contents of my little home page</p>
    @foreach($blogs as $blog)
        @if($blog['status']==1)
        <div style="width: 100px;height: 130px;background-color: #83a4d4;float: left; margin: 10px;">
            <h4>{{$blog['title']}}</h4>
            <p>{{$blog['body']}}</p>
            <div style="width: 10px;height: 10px;border-radius: 50%;background-color: #00bf00;margin: 5px"></div>
        </div>
        @else
            <div style="width: 100px;height: 130px;background-color: #83a4d4;float: left; margin: 10px;">
                <h4>{{$blog['title']}}</h4>
                <p>{{$blog['body']}}</p>
                <div style="width: 10px;height: 10px;border-radius: 50%;background-color: #7d0000;margin: 5px"></div>
            </div>
        @endif

    @endforeach
    @for($i=0;$i < count($blogs);$i++)
        <div style="width: 100px;height: 130px;background-color:#bfbf00;float: left; margin: 10px;">
            <h4>{{$blogs[$i]['title']}}</h4>
            <p>{{$blogs[$i]['body']}}</p>
        </div>
    @endfor

</main>
@endsection

