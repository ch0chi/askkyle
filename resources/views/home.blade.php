@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div class="home">
    <div class="content">
        <h1>Ask Me Anything!</h1>
        <img src="https://i.imgur.com/9FwWED6.png">
        <form method="POST" action="/quote-search" @submit.prevent="onSubmit">
            <div class="control">
                <label for="query" class="label">Search</label>
                <input type="text" id="query" class="form-control input-lg" v-model="query">
            </div>
        </form>
        <div class="results">

        </div>
        <ul id="quotes">
            <li v-for="quote in quotes">
                "@{{quote.body}}"
            </li>
        </ul>
    </div>
</div>

@endsection
