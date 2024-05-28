<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Show Project - Layana Infini Lanskap' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Title' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $project->title }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Category' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $project->category }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Status' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $project->status }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Featured Image' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            <img class="h-64 w-128" src="{{ asset('storage/' . $project->featured_image) }}" srcset="">
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Content' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {!! $project->content !!}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Author' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $project->author }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Updated At' }}
                        </h2>
                
                        <p class="mt-1 text-sm text-gray-600">
                            {{ $project->updated_at }}
                        </p>
                    </div>
                    <a href="{{ route('project.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
