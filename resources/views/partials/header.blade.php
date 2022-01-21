@dump(Route::currentRoutName())

<header class="container mt-4">
  <div class="image">
    <a href="{{ route('home') }}">
      <img src="{{asset('img/dc-logo.png')}}" alt="Dc Logo">
    </a>
  </div>
  <nav>
    <ul>
      <li>
        <a class="{{ (Route::currentRouteName() === 'characters') ? 'active' : '' }}"
        href="/characters" {{ route('characters') }}>  characters </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'comics') ? 'active' : '' }}"
        href="/comics" {{ route('comics') }}>  comics </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'movie') ? 'active' : '' }}"
        href="/movie" {{ route('movie') }}>  movie</a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'tv') ? 'active' : '' }}"
        href="/tv" {{ route('tv') }}>  tv </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'games') ? 'active' : '' }}"
        href="/games" {{ route('games') }}>  games </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'collectibles') ? 'active' : '' }}"
        href="/collectibles" {{ route('collectibles') }}>  collectibles </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'videos') ? 'active' : '' }}"
        href="/videos" {{ route('videos') }}>  videos </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'fans') ? 'active' : '' }}"
        href="/fans" {{ route('fans') }}>  fans </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'news') ? 'active' : '' }}"
        href="/news" {{ route('news') }}>  news </a>
      </li>
      <li>
        <a class="{{ (Route::currentRouteName() === 'shop') ? 'active' : '' }}"
        href="/shop" {{ route('shop') }}>  shop </a>
      </li>
    </ul>
  </nav>
</header>

<div class="jumbo"></div>
 