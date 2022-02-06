@extends('_layouts.base')

@section('content')
<div class="container align-items-center">
    <div class="row">
        <div class="col-12 mt-3">
            <h2 class="d-inline-block">Product and Services</h2>
            @for($i = 0; $i < 5; $i++)
                @if($i % 2 === 0)
                    @include('components.feature-horizontal-right')
                @else
                    @include('components.feature-horizontal-left')
                @endif
            @endfor
        </div>
    </div>
</div>
@endsection