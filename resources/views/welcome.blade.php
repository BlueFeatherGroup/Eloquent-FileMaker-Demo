<x-app>
    <x-slot name="title">
        Eloquent FileMaker Demo App
    </x-slot>

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <div class="min-w-full divide-y divide-gray-200">
            <a href="{{route('company-list')}}">
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200 cursor-pointer">
                <dt class="text-lg font-medium text-gray-500">
                    Company List
                </dt>
            </div>
            </a>
            <a href="{{route('company-detail', 1)}}">
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200 cursor-pointer">
                <dt class="text-lg font-medium text-gray-500">
                    Company Detail
                </dt>
            </div>
            </a>
            <a href="{{route('person-list')}}">

            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200 cursor-pointer">
                <dt class="text-lg font-medium text-gray-500">
                    Person List
                </dt>
            </div>
            </a>
            <a href="{{route('person-detail', 1)}}">

            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 hover:bg-gray-200 cursor-pointer">
                <dt class="text-lg font-medium text-gray-500">
                    Person Detail
                </dt>
            </div>
            </a>
        </div>
    </div>
    </div>


</x-app>
