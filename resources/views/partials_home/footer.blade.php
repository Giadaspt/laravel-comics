<footer>

  <div class="contain container">
    <div class="listFooter">
      <ul>
        @foreach ($lists as $list)
          <li>
            <h6>{{$list['title']}}</h6>  
            @foreach ($list['anchor'] as $item) 
            <p>
              <a class="footerLinks" href="#">{{$item}}</a>
            </p>
            @endforeach
          </li>
        @endforeach
      </ul>
    </div>
    <div class="DcImage">
      <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
    </div>
  </div>

  <div class="footerBottom">
    <div class="container"> 
      <button> sign-up now! </button>
      <div class="wrap ">
      <h5> follow us</h5>
      @foreach ($socials as $social)
        <div class="socialLogo">
          <a href="#"> <img src="{{$social['social_icon']}}" alt=""> </a>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</footer>