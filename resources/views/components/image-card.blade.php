<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <form class="d-flex py-3" action="{{ route('images.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Ajouter une image</h3>
                    <p class="mt-1  text-sm text-gray-600">Cela permetrais a l'utilisateur de choisir une
                        image.</p>
                    <label class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                        for="user_avatar">Upload
                        file</label>
                    <input name="name_url"
                        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="user_avatar_help" id="user_avatar" type="file">
                    <div class="flex mt-1">
                        <div class="col-span-6 sm:col-span-3">
                            <label class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="user_avatar">Title
                                file</label>
                            <input value="" placeholder="titre de l'image" type="text" name="title" id="last-name"
                                autocomplete="email"
                                class=" focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                        </div>
                        <div class="ml-3">
                            <label class="block mb-2 mt-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                                for="user_avatar">Categorie
                                file</label>
                            <select id="avatar" type="string" name="categorie"
                                class="focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                required autofocus>
                                @foreach ($categorie as $item)
                                    <option value="{{ $item->id }}">{{ $item->categorie }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit"
                        class="inline-flex mt-3 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">ajouter</button>


                </div>
            </form>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <!-- component -->

            <div class="flex justify-center items-center">
                <div class="2xl:mx-auto 2xl:container  px-4 sm:px-6 xl:px-20 2xl:px-0 w-full">
                    <div class="flex flex-col jusitfy-center items-center space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 md:gap-y-8">
                            @foreach ($image as $item)
                                <div
                                    class=" bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <a href="#">
                                        <img class="rounded-t-lg h-72 w-full"
                                            src={{ asset('img/' . $item->name_url) }} alt="">
                                    </a>
                                    <div class="p-5">
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Titre:
                                            {{ $item->title }}</p>
                                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Categorie:
                                            {{ $item->categorie->categorie }}</p>
                                        <form action="{{ route('images.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="flex items-center justify-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
