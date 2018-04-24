@extends('index.template')

@section('title')
<div class="nav-header center">
  <h1>Aplikasi Masa Depan</h1>
  <div class="tagline">Mengutamakan <span class="element"></span> </div>
</div>
@endsection


@section('css')
@endsection

@section('menu')
<div class="categories-wrapper purple lighten-1">
  <div class="categories-container">
    <ul class="container categories">
      <li class="active"><a href="#all">All</a></li>
      <li><a href="#polygon">Polygon</a></li>
      <li><a href="#bigbang">Big Bang</a></li>
      <li><a href="#sacred">Sacred Geometry</a></li>
    </ul>
  </div>
</div>
@endsection

@section('content')
<div id="portfolio" class="section gray">
      <div class="container">
        <div class="gallery row">
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x250.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Aquamarine</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Aquamarine</h3>
                  <span class="price">$29.99</span>
                </div>
                <p class="description">
                  Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
                  Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="{{asset('images/standar/350x300.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Sun</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Sun</h3>
                  <span class="price">$9.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x280.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Big Bang 1</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Big Bang 1</h3>
                  <span class="price">$23.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="{{asset('images/standar/350x320.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Maze</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Maze</h3>
                  <span class="price">$11.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="{{asset('images/standar/350x260.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Ice</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Ice</h3>
                  <span class="price">$14.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="{{asset('images/standar/350x290.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Cave</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Cave</h3>
                  <span class="price">$4.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter polygon">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img src="{{asset('images/standar/350x240.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Grapefruit</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Grapefruit</h3>
                  <span class="price">$14.99</span>
                </div>

                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>

              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x300.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Big Bang 2</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Big Bang 2</h3>
                  <span class="price">$40.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>
          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter bigbang">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x280.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Big Bang 3</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Big Bang 3</h3>
                  <span class="price">$18.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x250.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Circle</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Circle</h3>
                  <span class="price">$10.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x260.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Triangle</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Triangle</h3>
                  <span class="price">$10.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

          <div class="col l4 m6 s12 gallery-item gallery-expand gallery-filter sacred">
            <div class="gallery-curve-wrapper">
              <a class="gallery-cover gray">
                <img class="responsive-img" src="{{asset('images/standar/350x300.png')}}" alt="placeholder">
              </a>
              <div class="gallery-header">
                <span>Hexagon</span>
              </div>
              <div class="gallery-body">
                <div class="title-wrapper">
                  <h3>Hexagon</h3>
                  <span class="price">$10.99</span>
                </div>
                <p class="description">
Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</p>
                <p class="description">
Ea salvia adipisicing vegan man bun. Flexitarian cupidatat skateboard flannel. Drinking vinegar marfa you probably haven't heard of them consequat post-ironic, shabby chic williamsburg raclette vaporware readymade selfies brunch. Venmo selvage biodiesel marfa. Tbh literally 3 wolf moon, proident elit raclette chambray consequat edison bulb four loko accusamus. Semiotics godard eiusmod, ex esse air plant quinoa vaporware selfies keytar. Actually yuccie ennui flannel single-origin coffee, williamsburg cardigan banjo forage pug distillery tumblr hexagon vinyl occaecat.</p>

                <div class="carousel-wrapper">
                  <div class="carousel">
                    <a class="carousel-item" href="#one!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#two!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#three!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#four!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                    <a class="carousel-item" href="#five!"><img src="{{asset('images/standar/300x200.png')}}"></a>
                  </div>
                </div>
              </div>
              <div class="gallery-action">
                <a class="btn-floating btn-large waves-effect waves-light"><i class="material-icons">favorite</i></a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js/typed.min.js')}}"></script>
<script type="text/javascript">
   document.addEventListener("DOMContentLoaded", function() {
          new Typed('.element', {
          cursorChar: '|',
          strings: ["Menciptakan Dunia dalam Genggaman.", "Membantu dan Menghubungkan Guru dan Siswa", "Memudahkan Pengawasan Perkembangan Siswa"],
          startDelay: 1000,
          showCursor: true,
          autoInsertCss: true,
          backDelay: 2000,
          typeSpeed: 100,
          backSpeed: 20,
          // smartBackspace: false, // this is a default
          loop: true
        });
    });
</script>
@endsection
