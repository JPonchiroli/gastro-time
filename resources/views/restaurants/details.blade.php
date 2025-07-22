<x-layout>
  <h2>{{ $restaurant->name }}</h2>

  <div class="details">
    <p><strong>Type: </strong>{{ $restaurant->type }}</p>
    <div class="flex">
      <p><strong>Stars: </strong></p>
      <div class="flex">
        @for($i = 0; $i < $restaurant->stars; $i++)
          <img src="../star.png" alt="star" class="size-4 mt-1 ml-1">
          @endfor
      </div>
    </div>
    <p><strong>Address: </strong>{{ $restaurant->address }}</p>
    <p><strong>Description:</strong></p>
    <p>{{ $restaurant->description }}</p>
  </div>

  <div class="reviews">
    <h3>Reviews</h3>

    <div class="card ">
      @foreach($reviews as $review)
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
      @endforeach
    </div>

  </div>
</x-layout>
