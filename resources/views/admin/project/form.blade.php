<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($project) ? 'Edit Project - Layana Infini Lanskap' : 'Add Project - Layana Infini Lanskap' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($project) ? route('project.update', $project->id) : route('project.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($project)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="title" value="Title" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="$project->title ?? old('title')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>

                        <div>
                            <x-input-label for="category" value="Category" />
                            <select name="category" class="mt-1 block w-full">
                                {{-- <option value="24" selected>Product 1</option>
                                <option value="32">Product 2</option>
                                <option value="54">Product 3</option> --}}

                                @foreach ($project_category as $category)
                                <option :value="$project->category ?? old('category')" selected>{{ $category->category }}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('category')" />
                        </div>
                        <div>
                            <x-input-label for="status" value="Status" />
                            {{-- <x-text-input id="status" name="status" type="text" class="mt-1 block w-full" value="draft" required autofocus /> --}}
                                <select name="status" class="mt-1 block w-full" hide>
                                    <option value="Draft" selected>Draft</option>
                                </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>

                        <div>
                            <x-input-label for="author" value="Author" />
                            <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" :value="$project->author ?? old('author')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>

                        <div>
                            <x-input-label for="featured_image" value="Featured Image" />
                            <label class="block mt-2">
                                <span class="sr-only">Choose image</span>
                                <input type="file" id="featured_image" name="featured_image" accept=".jpg, .jpeg, .png" class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700
                                    hover:file:bg-violet-100
                                "/>
                            </label>
                            <div class="shrink-0 my-2">
                                <img id="featured_image_preview" class="h-64 w-128 object-cover rounded-md" src="{{ isset($project) ? Storage::url($project->featured_image) : '' }}" alt="Featured image preview" /></div>
                            <x-input-error class="mt-2" :messages="$errors->get('featured_image')" />
                        </div>

                        <div>
                            <x-input-label for="content" value="Content" />
                            {{-- <x-text-input id="content" name="content" type="text" class="mt-1 block w-full" :value="$project->content ?? old('content')" required autofocus /> --}}
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                            <x-textarea-input id="content" name="content" type="text" class="mt-1 block w-full" :value="$project->content ?? old('content')"   />
                            {{-- <textarea id="konten" class="form-control" name="konten" rows="10" cols="50"></textarea> --}}
                            {{-- <div id="content" :value="$project->content ?? old('content')"></div> --}}
                            
                            {{-- <div id="content"></div> --}}

                            {{-- <script>
                                ClassicEditor
                                    .create( document.querySelector( '#content' ) )
                                    .then( content => {
                                        console.log( content );
                                    })
                                    .catch( error => {
                                        console.error( error );
                                    });
                            </script> --}}
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
        // create onchange event listener for featured_image input
        document.getElementById('featured_image').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in featured_image
                document.getElementById('featured_image_preview').src = URL.createObjectURL(file)
            }
        }
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</x-app-layout>