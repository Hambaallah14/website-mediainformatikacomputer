<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl">Media Informatika Computer</h2>
    <div>
      @foreach ($datas as $data)
        <div class="mb-4">
          <h2>{{ $data['nama'] }}</h2>
          <h4>{{ $data['tanggal_lahir'] }}</h4>
          <h4>{{ Str::limit($data['descripsi'], 50, '...') }}</h4>
          <h5>{{ $data->created_at->diffForHumans() }}</h5>
          {{-- <h5>{{ $data->created_at->format('j M Y') }}</h5> --}}
          <h6><a href="/about/{{ $data['slug'] }}">Read More</a></h6>
        </div>
      @endforeach
      
      
      {{-- <a href="/toexcel" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Convert Excel</a>

      <a href="/topdf" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Convert Pdf</a> --}}
      
      
    </div>
  </article>
</x-layout>