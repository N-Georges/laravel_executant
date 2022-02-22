<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <form class="d-flex py-3" action="{{ route('avatars.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Ajouter un avatar</h3>
                    <p class="mt-1  text-sm text-gray-600">Cela permetrais a l'utilisateur de choisir un avatar.</p>
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
                            <input value="" placeholder="nom de l'avatar" type="text" name="type" id="last-name"
                                autocomplete="email"
                                class=" focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                        </div>
                        
                        
                    </div>

                    <button type="submit"
                        class="inline-flex mt-3 justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">ajouter</button>


                </div>
            </form>
                

            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <!-- component -->
            
            <div class="flex justify-center items-center">
                <div class="2xl:mx-auto 2xl:container  px-4 sm:px-6 xl:px-20 2xl:px-0 w-full">
                    <div class="flex flex-col jusitfy-center items-center space-y-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 md:gap-y-8">
                            @foreach ($avatar as $item)
                            <div class="relative group justify-center items-center h-full w-full hidden lg:flex flex-col">
                                <img class="object-center object-cover h-full w-full"
                                    src={{ asset('img/' . $item->name_url) }} alt="avatar-image" />
                                <button
                                    class="dark:bg-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 font-medium leading-none text-gray-800 py-3 w-36 bg-white mt-2">{{ $item->type }}</button>

                                    <form action="{{ route('avatars.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex mt-2 items-center justify-center py-2 px-3 text-sm font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            Delete
                                        </button>
                                    </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
