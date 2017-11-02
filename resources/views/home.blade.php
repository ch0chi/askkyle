@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="wrap">
    <div class="header">
        <div class="header-content">
            <h1>Ask Me Anything!</h1>
            <img src="https://i.imgur.com/9FwWED6.png" class="img-responsive">
        </div>
    </div>
    <div class="search">
        <form method="GET" action="/quotes" @submit.prevent="onSearch">
            {{ csrf_field() }}
            <div class="control">
                <label for="query" class="label"></label>
                <input type="text" id="query" class="form-control input-lg" placeholder="What do you need help with?" v-model="query">
            </div>
        </form>
    </div>
    <div class="results">
        <ul id="quotes" class="speech-bubble" v-show="toggleShow"  v-cloak>
            <li v-show="toggleShow" v-if="quotes.length = 1">
                <p>@{{ quotes.body }}</p>
            </li>
            <li v-show="toggleShow" v-else v-for="quote in quotes"  v-cloak>
                <p>"@{{quote.body}}"</p>
            </li>
        </ul>
    </div>

</div>

@endsection
