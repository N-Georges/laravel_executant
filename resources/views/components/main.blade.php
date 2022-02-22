<!-- component -->
<div id="container" class="w-4/5 mx-auto">
    <div class="flex flex-col">
        <!-- Card 1 -->
        <div class=" py-2">
            <div class="bg-white px-6 py-8 rounded-lg shadow-lg text-center">
                <div class="mb-3">
                    <img class="mx-auto rounded-full" width="150px" src={{ asset('img/'.Auth::user()->avatar->name_url) }} alt="" />
                </div>
                <h2 class="text-xl font-medium text-gray-700">{{ Auth::user()->name }}</h2>
                <span class="text-blue-500 block mb-5"><span class="font-bold text-black">Email:</span>
                    {{ Auth::user()->email }} | <span class="font-bold text-black">Role:</span>
                    {{ Auth::user()->role->role }}</span> 

                <a href="{{ route('users.edit') }}" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</a>
            </div>
        </div>

    </div>
