<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <article class="py-8 max-w-screen-md">
    <h2 class="mb-1 text-3xl">Media Informatika Computer</h2>
    <div class="mb-4">
      <h2>{{ $post['nama'] }}</h2>
      <h4>{{ $post['tanggal_lahir'] }}</h4>
      <h4>{{ $post['descripsi'] }}</h4>
    </div>
  </article>
</x-layout>