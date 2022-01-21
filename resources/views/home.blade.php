@extends('layouts.app')

@section('content')
  <div class="jumbo"></div>

  <main> 
    <div class="container">
      <div class="currentSeries">
        <h5>current series</h5>
      </div>
    </div>
    <div class="gs_container">
      @foreach ($cards as $card)
        <div class="card">
          <div class="characterImage">
            <img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}">
          </div>
          <h6>{{ $card['series'] }}</h6>
        </div>
        @endforeach
      <div class="container btn">
        <button>Load More</button>
      </div>
    </div>
  </main>

@endsection