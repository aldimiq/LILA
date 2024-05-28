<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($project_category) ? 'Edit Project Category - Layana Infini Lanskap' : 'Add Project Category - Layana Infini Lanskap' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($project_category) ? route('project_category.update', $project_category->id) : route('project_category.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($project_category)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="category" value="Category" />
                            <x-text-input id="category" name="category" type="text" class="mt-1 block w-full" :value="$project_category->category ?? old('category')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // create onchange event listener for photo input
        document.getElementById('photo').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in photo
                document.getElementById('photo_preview').src = URL.createObjectURL(file)
            }
        }
    </script>
</x-app-layout>