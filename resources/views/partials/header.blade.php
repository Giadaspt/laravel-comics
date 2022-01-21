
<header class="container mt-4">
  <div class="image">
    <a href="{{ route('home') }}">
      <img src="{{asset('img/dc-logo.png')}}" alt="Dc Logo">
    </a>
  </div>
  <nav>
    <ul>
      <li>
        <a href="/characters" {{ route('characters') }}>  characters </a>
      </li>
      <li>
        <a href="/comics" {{ route('comics') }}>  comics </a>
      </li>
      <li>
        <a href="/movie" {{ route('movie') }}>  movie</a>
      </li>
      <li>
        <a href="/tv" {{ route('tv') }}>  tv </a>
      </li>
      <li>
        <a href="/games" {{ route('games') }}>  games </a>
      </li>
      <li>
        <a href="/collectibles" {{ route('collectibles') }}>  collectibles </a>
      </li>
      <li>
        <a href="/videos" {{ route('videos') }}>  videos </a>
      </li>
      <li>
        <a href="/fans" {{ route('fans') }}>  fans </a>
      </li>
      <li>
        <a href="/news" {{ route('news') }}>  news </a>
      </li>
      <li>
        <a href="/shop" {{ route('shop') }}>  shop </a>
      </li>
    </ul>
  </nav>
</header>

<div class="jumbo"></div>
 