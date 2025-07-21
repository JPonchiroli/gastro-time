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

    @foreach($reviews as $review)
      <h1>{{ $review }}</h1>
    @endforeach

  </div>
</x-layout>
