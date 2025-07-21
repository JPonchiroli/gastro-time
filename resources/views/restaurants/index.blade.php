<x-layout>

  <h2>Ours Restaurants</h2>

  <ul>
    @foreach($restaurants as $restaurant)
      <li>
        <x-card href="{{ route('restaurants.details', $restaurant) }}">
          <h3>{{ $restaurant->name }}</h3>
          <p class="mb-3">{{ $restaurant->type }}</p>
        </x-card>
      </li>
    @endforeach
  </ul>

  {{ $restaurants->links() }}
</x-layout>