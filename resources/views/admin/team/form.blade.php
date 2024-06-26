<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($team) ? 'Edit Team - Layana Infini Lanskap' : 'Add Team - Layana Infini Lanskap' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($team) ? route('team.update', $team->id) : route('team.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($team)
                            @method('put')
                        @endisset
                
                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="$team->name ?? old('name')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="position" value="Position" />
                            {{-- use textarea-input component that we will create after this --}}
                            {{-- <x-text-input id="position" name="position" class="mt-1 block w-full" required autofocus>{{ $team->position ?? old('position') }}</x-textarea-input> --}}
                            <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" :value="$team->position ?? old('position')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('position')" />
                        </div>

                        <div>
                            <x-input-label for="photo" value="Photo" />
                            <label class="block mt-2">
                                <span class="sr-only">Choose image</span>
                                <input type="file" id="photo" name="photo" accept=".jpg, .jpeg, .png" class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700
                                    hover:file:bg-violet-100
                                "/>
                            </label>
                            <div class="shrink-0 my-2">
                                <img id="photo_preview" class="h-64 w-128 object-cover rounded-md" src="{{ isset($team) ? Storage::url($team->photo) : '' }}" alt="Photo preview" /></div>
                            <x-input-error class="mt-2" :messages="$errors->get('photo')" />
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