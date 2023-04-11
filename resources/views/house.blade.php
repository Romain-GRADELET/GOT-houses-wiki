@extends('base')

@section('page-content')
            <ul class="houses-list">

                @foreach( $houses as $house )
                <li class="house-logo" style="background: #e3e3e3;">
                    <a href="#/house/1">
                        <img src="assets/img/houses/{{ $house->image }}" alt="Stark">
                    </a>
                </li>
                @endforeach
                
            </ul>
@endsection