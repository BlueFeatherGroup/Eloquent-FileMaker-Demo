<x-app>
    <x-slot name="title">
        Person Details
    </x-slot>

    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <!-- Profile Summary -->
        <div class="px-40 py-5 sm:px-6 h-40">
            <div class="flex-shrink-0 h-30 w-30 float-left">
                <img class="h-32 w-32 rounded-full"
                     src="{{$person->photo}}"
                     alt="">
            </div>

            <div class="ml-36 mt-8">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{$person->name_first_last_c}}
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    {{$person->email}}
                </p>
                <p class="mt-1 max-w-2xl text-sm text-blue-500">
                    <a href="{{route('company-detail', $person->company_id)}}"> {{$person->company->name}}</a>
                </p>
            </div>
        </div>

        <!-- Profile Update Form -->
        <div class="bg-gray-50 mt-4 p-5 border-t border-gray-200  ">
        <form class="w-full max-w-sm">
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name-first"> First
                        Name </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="name-first" type="text" value="{{$person->name_first}}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name-last"> Last
                        Name </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="name-last" type="text" value="{{$person->name_last}}">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                        Email </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="email" type="email" value="david@bluefeathergroup.com">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="phone">
                        Phone </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="phone" type="tel" value="(770) 765-6258">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                        Title </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        name="title" type="text" value="Consultant">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                </div>
                <div class="md:w-2/3">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Update
                    </button>
                </div>
            </div>

        </form>
        </div>

    </div>


</x-app>
