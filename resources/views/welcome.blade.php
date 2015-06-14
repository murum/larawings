@extends("layout.master")

@section("content")
<div class="container">
    <div class="content">
        <div class="title">
            <h1>
                Laravel 5
            </h1>
        </div>

        <div class="quote">{{ Inspiring::quote() }}</div>
    </div>
</div>
@stop
