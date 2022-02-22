<div class="flex flex-wrap -mx-3 overflow-hidden">

    @foreach ($image as $item)
        <div class="my-3 px-3 w-1/3 overflow-hidden">
            <!-- Column Content -->
            <div class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg h-96 w-full" src="{{ asset('img/' . $item->name_url) }}" alt="">
                </a>
                <div class="p-5">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">titre de l'image: {{ $item->title }}
                    </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">categorie:
                        {{ $item->categorie->categorie }}</p>
                    <a href="{{ route('galleries.download', $item->id) }}"
                        class="flex items-center justify-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Download
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
