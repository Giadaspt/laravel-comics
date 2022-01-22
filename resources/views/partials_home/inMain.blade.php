<div class="inMain ">
  <div class="containerInMain ">
    <div class="market">
      @foreach ($markets as $market)
      <div class="marketImage">
        <img src="{{$market['merchandise']}}" alt="">
      </div>
      <h6>{{$market['text']}}</h6>
      @endforeach
    </div>
  </div>
</div>