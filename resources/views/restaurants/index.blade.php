<x-layout>
  <h2 class="text-3xl">Ours Restaurants</h2>
  <ul>
    @foreach($restaurants as $restaurant)
      <li>
        <x-card >
          <div class="flex justify-between">
            <h3 class="text-2xl">{{ $restaurant->name }}</h3>
            <div class="flex">
              @for($i = 0; $i < $restaurant->stars; $i++)
                <img src="./star.png" alt="star" class="size-4">
              @endfor
            </div>
          </div>
          <p class="mb-3">{{ $restaurant->type }}</p>
        </x-card>
      </li>
    @endforeach
  </ul>

  {{ $restaurants->links() }}
</x-layout>