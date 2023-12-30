<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          {{ __("You're logged in!") }}
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white p-6 shadow-sm sm:rounded-lg">
        <button class="mb-6">
          <a href="{{ route('book.create') }}"
            class="hover:bg-primary/50 flex items-center gap-1 rounded-md bg-black px-4 py-2 text-white transition">
            Add Book
          </a>
        </button>
        <div class="shadow">
          <table class="w-full text-left">
            <thead class="bg-slate-50">
              <tr>
                <th class="p-3">Title</th>
                <th class="p-3">Author</th>
                <th class="p-3">Year</th>
                <th class="p-3">Action</th>
              </tr>
            </thead>
            <tbody>
              @if (session('success'))
                <p>{{ session('success') }}</p>
              @endif
              @foreach ($books as $book)
                <tr>
                  <td class="p-3">{{ $book->title }}</td>
                  <td class="p-3">{{ $book->author }}</td>
                  <td class="p-3">{{ $book->year }}</td>
                  <td class="flex w-[5rem] gap-3 p-3">
                    <a href="{{ route('book.show', $book->id) }}" class="text-blue-600 hover:underline">Detail</a>
                    <a href="{{ route('book.edit', $book->id) }}" class="text-green-600 hover:underline">Edit</a>
                    <form action="{{ route('book.destroy', $book->id) }}" method="POST"
                      onsubmit="return confirm('Are you sure?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-600 hover:underline">Delete</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</x-app-layout>
