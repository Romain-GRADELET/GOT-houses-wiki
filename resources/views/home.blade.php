@extends('base')
@section('page-content')

            <ul class="characters-list">
                @foreach ( $characters as $character )
                <li class="character-card">
                    <a href="{{ route('main.character', ['id' =>  $character->id]) }}">

                        <div class="avatar" style="background: #e3e3e3;">
                            <img src="assets/img/{{ $character->image }}" alt="Arya">
                        </div>
                        <div class="name">
                            {{ $character->first_name }} {{ $character->last_name }}
                        </div>
                    </a>
                </li>
                @endforeach

            </ul>
@endsection
