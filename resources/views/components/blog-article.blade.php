
<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-6 md:gap-6">
      @webmaster
      <div class="md:col-span-1">
          <form class="d-flex py-3" action="{{ route('blogs.store') }}" method="post">
              @csrf
              <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">Ajouter un article</h3>
                  <p class="mt-1  text-sm text-gray-600">Cela permetrais au webmaster de choisir de cree un article.</p>
                  <div class="flex mt-1">
                      <div class="col-span-6 sm:col-span-3">
                          <label class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                              for="user_avatar">Titre
                              article</label>
                          <input value="" placeholder="titre de l'image" type="text" name="title" id="last-name"
                              autocomplete="email"
                              class=" focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                      </div>
                    </div>
                    <div class="">
                        <label class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                            for="user_avatar">Text de l'article</label>

                            <textarea name="description" id="" cols="40" rows="4"></textarea>
                        
                    </div>

                  <button type="submit"
                      class="inline-flex mt-3 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">ajouter</button>


              </div>
          </form>
      </div>
      @endwebmaster
      <body class="bg-gray-100 text-gray-700  font-sans quicksand">

        <div class="">
            <div class="grid md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 ">
    
                @foreach ($blog as $item)
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">May 17, 2020</p>
                        <h2 class="font-bold text-lg h-2 mb-8">{{ $item->title }}</h2>
                        <p class="text-xs">
                            {{ $item->description }}
                        </p>
    
                    </div>
                    <div class="w-full text-right mt-4">
                        <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
                    </div>
                </div>
                    
                @endforeach
                {{-- <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">May 17, 2020</p>
                        <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
    
                    </div>
                    <div class="w-full text-right mt-4">
                        <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
                    </div>
                </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">May 17, 2020</p>
                        <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
    
                    </div>
                    <div class="w-full text-right mt-4">
                        <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
                    </div>
                </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">May 17, 2020</p>
                        <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
    
                    </div>
                    <div class="w-full text-right mt-4">
                        <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
                    </div>
                </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">May 17, 2020</p>
                        <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
    
                    </div>
                    <div class="w-full text-right mt-4">
                        <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
                    </div>
                </div>
                <div class="bg-white overflow-hidden hover:bg-green-100 border border-gray-200 p-3">
                    <div class="m-2 text-justify text-sm">
                        <p class="text-right text-xs">May 17, 2020</p>
                        <h2 class="font-bold text-lg h-2 mb-8">Blog Post Title </h2>
                        <p class="text-xs">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
    
                    </div>
                    <div class="w-full text-right mt-4">
                        <a class="text-green-400 uppercase font-bold text-sm" href="#">Read More</a>
                    </div>
                </div>
     --}}
            </div>
        </div>
    
    </body>
  </div>
</div>