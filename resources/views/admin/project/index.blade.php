<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects - Layana Infini Lanskap') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('project.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Project</a>
                    <a href="{{ route('project_category.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">Edit Category</a>
                </div>
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Title</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Category</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Author</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Status</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Updated At</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($project as $project)
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ Str::limit($project->title, 30) }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $project->category }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ Str::limit($project->title, 10) }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $project->status }}</td>
                                    
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $project->created_at->format('d M Y') }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        <a href="{{ route('project.show', $project->id) }}" class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">SHOW</a>
                                        @if ($project->status === 'Published')
                                        <form method="post" action="{{ route('project.unpublish', $project->id) }}" class="inline">
                                            @csrf 
                                            <button class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">UNPUBLISH</button>
                                        </form>
                                        @elseif ($project->status === 'Draft')
                                            <form method="post" action="{{ route('project.publish', $project->id) }}" class="inline">
                                                @csrf 
                                                <button class="border border-blue-500 hover:bg-blue-500 hover:text-white px-4 py-2 rounded-md">PUBLISH</button>
                                            </form>
                                        @endif
                                        {{-- <a href="{{ route('project.edit', $project->id) }}" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a> --}}
                                        <form method="post" action="{{ route('project.destroy', $project->id) }}" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">DELETE</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
