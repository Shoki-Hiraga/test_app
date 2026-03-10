<section id="pickup" class="content-section">

  <div class="container">

    <div class="section-header">
      <h2>新着 / ピックアップ</h2>
    </div>

    <div class="car-card-list">
      @foreach ($pickupCars as $car)
      <article class="car-card">
        <div class="car-card__image">
          <img src="{{ asset($car['img']) }}" alt="{{ $car['name'] }}">
        </div>
        <div class="car-card__body">

          <h3 class="car-card__title">
            {{ $car['name'] }}
          </h3>

          <div class="car-card__price">
            {{ $car['price'] }}
          </div>

          <div class="car-card__note text-muted">
            {{ $car['note'] }}
          </div>

        </div>
      </article>
      @endforeach
    </div>
</section>
