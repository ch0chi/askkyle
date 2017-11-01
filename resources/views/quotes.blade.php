@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="home">
        <div class="content">
            <img src="{{asset('storage/images/khofmeyer.png')}}">
            @if(count($quotes))
                <h2>Top Results:</h2>
            <ul>
                @foreach ($quotes as $quote)
                    <li>
                        <p>{{$quote->body}}</p>
                    </li>
                @endforeach
            </ul>

            <hr>
            @endif
        </div>
    </div>

@endsection
