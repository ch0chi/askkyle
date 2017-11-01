@extends('layouts.app')

@section('content')
<div class="wrap">
    <div class="header">
        <div class="header-content">
            <h1>Add a Tip!</h1>
            <img src="https://i.imgur.com/9FwWED6.png" class="img-responsive">
        </div>
    </div>
    <div class="content">
        <div class="addQuoteForm">
            <form method="POST" action="/quotes" @submit.prevent="onStoreQuote">
                {{ csrf_field() }}
                <div class="control">
                    <label for="body" class="label"></label>
                    <p class="text-center">Please don't include quotation marks because it's 6pm and i'll mess with it later</p>
                    <input type="text" id="body" name="body" class="form-control input-lg" placeholder="Add a Quote" v-model="newQuote">
                </div>
            </form>
        </div>
        <div class="alert alert-success" role="alert" v-show="toggleShow">Added Quote!</div>
    </div>
</div>


@endsection
