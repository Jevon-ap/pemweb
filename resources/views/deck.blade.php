@extends('main')
@section('contain')
<h2> Deck</h2>
<div class="batas"></div>
<div class="jarak"></div>
<div class="container d-flex justify-content-center">
    <div class="row row-cols-4">
      <div class="col-4">

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('CSS/yugioh1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="{{ asset('CSS/yugioh1.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>
      <div class="col-4">

        <div class="card" style="width: 18rem;">
            <img src="{{ asset('CSS/yugioh2.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="{{ asset('CSS/yugioh2.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>
      <div class="col-4">
        <div class="card" style="width: 18rem;">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                  <a href=""><li class="list-group-item btn btn-primary ">Card catalogue</li></a>
                  <a href=""><li class="list-group-item btn btn-primary">Create Deck</li></a>
                  <a href=""><li class="list-group-item btn btn-primary">Deck Breakdown</li></a>
                </ul>
              </div>
          </div>
      </div>
    </div>
  </div>



@endsection
