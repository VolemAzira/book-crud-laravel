<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div>
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

      </div>
    </div>
  </div>

  <main class="mx-auto my-12 flex max-w-7xl flex-col gap-3 bg-white p-5 shadow-sm sm:rounded-lg sm:px-6 lg:px-8">
    <a href="{{ route('book.index') }}" class="flex items-center gap-1 font-semibold transition hover:text-neutral-500">
      Back
    </a>
    <br>
    <section class="flex justify-between">
      <span class="w-1/2">
        <h2 class="text-lg font-semibold text-gray-800">Add book</h2>
        <div class="text-sm font-medium text-neutral-400">Lorem ipsum dolor sit amet</div>
      </span>
      <span class="w-1/2">

        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data"
          class="flex flex-col gap-2">
          @csrf
          <div>
            <label for="title">ee</label><br>
            <input type="text" name="title" placeholder="Title"
              class="mt-3 w-full rounded-md border border-slate-100 p-3" required>
          </div>
          <div>
            <label for="author">author</label>
            <input type="text" name="author" placeholder="author"
              class="mt-3 w-full rounded-md border border-slate-100 p-3" required>
          </div>
          <div>
            <label for="year">Year</label>
            <input type="number" name="year" placeholder="Year"
              class="mt-3 w-full rounded-md border border-slate-100 p-3" required>
          </div>
          @if ($errors->any())
            <div class="text-md text-red-500">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="mt-3">
            <button type="submit" class="rounded-md bg-black px-3 py-2 text-white transition hover:bg-black/80">Add
              book</button>
          </div>
        </form>
      </span>
    </section>
  </main>

</x-app-layout>
