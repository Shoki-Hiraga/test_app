@extends('layouts.app')

@section('content')

{{-- ===============================
Page Intro
=============================== --}}
  @include('components.intro')


{{-- ===============================
Pickup Cars
=============================== --}}
  @include('components.pickup')


{{-- ===============================
Car Results
=============================== --}}
  @include('components.results')


{{-- ===============================
Reviews
=============================== --}}
  @include('components.reviews')


{{-- ===============================
Reason Section
=============================== --}}
  @include('components.reason')


{{-- ===============================
Campaign Banner
=============================== --}}
  @include('components.campaign')


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