<x-layout>
  <h2>{{ $restaurant->name }}</h2>

  <div class="details">
    <p><strong>Type: </strong>{{ $restaurant->type }}</p>
    <p><strong>Address: </strong>{{ $restaurant->address }}</p>
    <p><strong>Description:</strong></p>
    <p>{{ $restaurant->description }}</p>
  </div>

  <div class="reviews">

    <h3>Reviews</h3>

    @forelse($reviews as $review)
    <div class="card">
      <div class="flex justify-between">
        <div class="flex">
          <h4>{{ $review->author }}</h4>

          @for($i = 0; $i < $review->review; $i++)
            <img src="../star.png" alt="star" class="size-4 mt-1.5 ml-1.5">
            @endfor
        </div>

        <h4>{{ date('d/m/Y', strtotime($review->review_date)) }}</h4>
      </div>
      <span>{{ $review->comment }}</span>
    </div>
    @empty
      <h4 class="flex justify-center">The restaurant has no reviews yet.</h4>
    @endforelse

  </div>
</x-layout>
