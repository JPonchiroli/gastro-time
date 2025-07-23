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

    @foreach($reviews as $review)
    <div class="card ">

      @if($review == '' || $review == null)
      <h1>The restaurant has no reviews yet.</h1>
      @endif

      <div class="flex justify-between">
        <div class="flex">
          <h4>{{ $review->author }}</h4>

          @for($i = 0; $i < $review->review; $i++)
            <img src="../star.png" alt="star" class="size-4 mt-1.5 ml-1.5">
            @endfor
        </div>

        <h4>{{ date('d/m/Y', strtotime($review->review_date)); }}</h4>

      </div>
      <span>{{ $review->comment }}</span>
      
    </div>
    @endforeach

  </div>
</x-layout>
