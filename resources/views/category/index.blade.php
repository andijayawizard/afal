<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $text }}
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="w-full">
                    <thead>
                        <thead>
                            <tr class="">
                                <th class="">#</th>
                                <th class="">Name</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="">
                                <td class="">{{ $category->id }}</td>
                                <td class="">{{ $category->name }}</td>
                                <td class="">Detail | Edit | Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $categories->links() }} --}}
                {{-- {!! $categories->withQueryString()->links('pagination::bootstrap-5') !!} --}}
                {{ $categories->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</x-app-layout>
