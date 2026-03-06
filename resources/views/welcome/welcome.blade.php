@extends('layouts.app')

@section('content')

{{-- ===============================
Page Intro
=============================== --}}
<section class="page-intro">
  <div class="container page-intro__grid">
    <div class="page-intro__content">
      <p class="page-intro__tag">
        サンプル査定サイト
      </p>
      <h1 class="page-intro__title">
        見出し<br>
        ファーストビュー
      </h1>
      <p class="page-intro__description">
        お問い合わせはこちらから
      </p>
      {{-- Search Form (表示のみ) --}}
      <div class="search-form">
        <div class="search-form__row">
          <div class="search-form__field">
            <div class="search-form__label">メーカー</div>
            <div class="search-form__input">選択（表示のみ）</div>
          </div>

          <div class="search-form__field">
            <div class="search-form__label">車種</div>
            <div class="search-form__input">選択（表示のみ）</div>
          </div>
        </div>

        <div class="search-form__row">
          <div class="search-form__field search-form__field--wide">
            <div class="search-form__label">年式 / 走行距離</div>
            <div class="search-form__input">入力（表示のみ）</div>
          </div>
        </div>
      </div>
    </div>


    <div class="page-intro__media">
      <img
        src="{{ asset($images['FV']) }}"
        alt="FV"
        class="page-intro__image"
      >
    </div>

  </div>

</section>



{{-- ===============================
Pickup Cars
=============================== --}}
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



    {{-- Feature List --}}
    <div class="feature-list">

      <div class="feature-item">
        <div class="feature-item__icon">✓</div>
        <div>無料査定</div>
      </div>

      <div class="feature-item">
        <div class="feature-item__icon">✓</div>
        <div>専門対応</div>
      </div>

      <div class="feature-item">
        <div class="feature-item__icon">✓</div>
        <div>全国対応</div>
      </div>

    </div>

  </div>

</section>



{{-- ===============================
Reason Section
=============================== --}}
<section class="content-section content-section--soft">

  <div class="container reason-section">

    <div class="section-header">
      <h2>選ばれる理由</h2>
    </div>

    <div class="reason-list">

      <div class="reason-card">
        <div class="reason-card__title">
          専門スタッフが査定
        </div>
        <div class="text-muted">
          経験豊富なスタッフが査定を行います。
        </div>
      </div>

      <div class="reason-card">
        <div class="reason-card__title">
          無料査定
        </div>
        <div class="text-muted">
          査定費用は一切かかりません。
        </div>
      </div>

      <div class="reason-card">
        <div class="reason-card__title">
          全国対応
        </div>
        <div class="text-muted">
          全国どこでも査定対応可能です。
        </div>
      </div>

      <div class="reason-card">
        <div class="reason-card__title">
          高価買取
        </div>
        <div class="text-muted">
          専門知識で適正価格を提示します。
        </div>
      </div>

    </div>

    <div class="reason-section__image">
      <img
        src="{{ asset($images['card1']) }}"
        alt="説明画像"
        class="reason-image"
      >
    </div>
  </div>
</section>



{{-- ===============================
Campaign Banner
=============================== --}}
<section class="content-section">
  <div class="container">
    <div class="campaign-banner-list">
      <div class="campaign-banner">バナー1</div>
      <div class="campaign-banner">バナー2</div>
      <div class="campaign-banner">バナー3</div>
    </div>
  </div>
</section>



{{-- ===============================
Reviews
=============================== --}}
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



{{-- ===============================
Car Results
=============================== --}}
<section class="content-section content-section--soft">
  <div class="container">
    <div class="section-header">
      <h2>買取実績 / 事例</h2>
    </div>

    <div class="car-card-list">
      @foreach ($featuredCars as $car)
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
  </div>
</section>



{{-- ===============================
FAQ
=============================== --}}
<section id="faq" class="content-section">
  <div class="container">
    <div class="section-header">
      <h2>よくある質問</h2>
    </div>

    <div class="faq-list">
      <details class="faq-item">
        <summary class="faq-question">査定は無料ですか？</summary>
        <div class="faq-answer text-muted">
          はい、査定は完全無料です。
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">どこまで対応していますか？</summary>
        <div class="faq-answer text-muted">
          全国対応しています。
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">古い車でも大丈夫ですか？</summary>
        <div class="faq-answer text-muted">
          問題ありません。旧車も対応しています。
        </div>
      </details>

      <details class="faq-item">
        <summary class="faq-question">査定時間はどれくらい？</summary>
        <div class="faq-answer text-muted">
          約30〜60分程度です。
        </div>
      </details>
    </div>
  </div>
</section>
@endsection