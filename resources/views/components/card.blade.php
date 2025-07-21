<div class="card">
  {{ $slot }}
  <a {{ $attributes->merge(['class' => 'btn']) }}>View Restaurant</a>
</div>