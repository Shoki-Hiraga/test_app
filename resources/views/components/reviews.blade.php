<section id="reviews" class="content-section">
  <div class="container">
    <div class="section-header">
      <h2>お客様の口コミ</h2>
    </div>
    <div class="review-list">
      @foreach ($reviews as $rv)
      <article class="review-card">
        <div class="review-card__header">
          <div class="review-card__name">
            {{ $rv['name'] }}
          </div>
          <div class="review-card__rating">
            {{ str_repeat('★', $rv['star']) }}
            {{ str_repeat('☆', 5 - $rv['star']) }}
          </div>
        </div>

        <p class="text-muted">
          {{ $rv['text'] }}
        </p>
      </article>
      @endforeach
    </div>
  </div>
</section>
