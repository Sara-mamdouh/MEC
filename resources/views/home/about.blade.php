<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{asset("fontawesome-free-6.5.2-web/css/all.min.css")}}">
  @vite(['resources/css/app.css','public/scss/app.scss','resources/js/app.js'])
  <title>about page</title>
</head>
<body>
@include("partials.userpage._navbar")

<section>
  <header class="head">
    <div class="head-dec">
      <div>
        <h2 class="head-dec__contact">FAQ page</h2>
        <p> home <span><i class="fa-solid fa-arrow-right"></i></span> about</p>
      </div>
    </div>
  </header>
  <main class="faq">
    <div class="faq-container">
      <div class="accordion-item">
        <h2 class="accordion-item__header">
          <button class="accordion-item__button" type="button">
            What is MEC Academy?
          </button>
          <i class="fa-solid fa-angle-down"></i>
        </h2>
        <div class="accordion-item__body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
            sunt, et quis doloremque quae ex, ipsam officiis neque porro
            quam aut voluptate nulla veritatis, exercitationem
            reprehenderit. Quibusdam dolor fugiat eos.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-item__header">
          <button class="accordion-item__button" type="button">
            How to choose the right courses for me?
          </button>
          <i class="fa-solid fa-angle-down"></i>
        </h2>
        <div class="accordion-item__body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
            sunt, et quis doloremque quae ex, ipsam officiis neque porro
            quam aut voluptate nulla veritatis, exercitationem
            reprehenderit. Quibusdam dolor fugiat eos.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-item__header">
          <button class="accordion-item__button" type="button">
            Can I pause my courses plan at any time?
          </button>
          <i class="fa-solid fa-angle-down"></i>
        </h2>
        <div class="accordion-item__body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
            sunt, et quis doloremque quae ex, ipsam officiis neque porro
            quam aut voluptate nulla veritatis, exercitationem
            reprehenderit. Quibusdam dolor fugiat eos.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-item__header">
          <button class="accordion-item__button" type="button">
            Can I get a refund for my course payment any time?
          </button>
          <i class="fa-solid fa-angle-down"></i>
        </h2>
        <div class="accordion-item__body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
            sunt, et quis doloremque quae ex, ipsam officiis neque porro
            quam aut voluptate nulla veritatis, exercitationem
            reprehenderit. Quibusdam dolor fugiat eos.
          </p>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-item__header">
          <button class="accordion-item__button" type="button">
            Can I still join even if the course has started already?
          </button>
          <i class="fa-solid fa-angle-down"></i>
        </h2>
        <div class="accordion-item__body">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
            sunt, et quis doloremque quae ex, ipsam officiis neque porro
            quam aut voluptate nulla veritatis, exercitationem
            reprehenderit. Quibusdam dolor fugiat eos.
          </p>
        </div>
      </div>
    </div>
  </main>
</section>
@include("partials.userpage._footer")

<script src="{{asset("js/main.js")}}"></script>


</body>
</html>