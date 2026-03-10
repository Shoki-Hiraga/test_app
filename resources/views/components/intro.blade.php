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