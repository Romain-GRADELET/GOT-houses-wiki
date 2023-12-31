@extends('base')
@section('page-content')


    @if (isset ($characters))

            <ul class="characters-list">
                @foreach ( $characters as $character )
                <li class="character-card">
                    <a href="{{ route('main.character', ['id' =>  $character->id]) }}">

                    @foreach( $character->houses as $house )
                        <div class="avatar" style="background: #<?= $house->colour ?>;">
                    @break
                    @endforeach
                            <img src="assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
                        </div>
                        <div class="name">
                            {{ $character->first_name }} {{ $character->last_name }}
                        </div>
                    </a>
                </li>
                @endforeach

            </ul>

    @else

            <ul class="characters-list">
                @foreach ( $house->characters as $character )
                <li class="character-card">
                    <a href="{{ route('main.character', ['id' => $character->id]) }}">

                        <div class="avatar" style="background: #<?= $house->colour ?>;">
                            <img src="../assets/img/{{ $character->image }}" alt="{{ $character->first_name }}">
                        </div>
                        <div class="name">
                            {{ $character->first_name }} {{ $character->last_name }}
                        </div>
                    </a>
                </li>
                @endforeach

            </ul>

    @endif
@endsection
