<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit a Gig
            </h2>
            <p class="mb-4">Post a gig to find a developer</p>
        </header>

        <form wire:submit="edit" enctype="multipart/form-data">
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" wire:model="company" class="border border-gray-200 rounded p-2 w-full"
                    name="company" value="{{ $listing->company }}" />

                @error('comapany')
                    <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}" wire:model="title" />
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ $listing->location }}"
                    wire:model='location' />
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full"
                    name="email"value="{{ $listing->email }}" wire:model="email" />
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ $listing->website }}" wire:model="website" />
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input wire:model="tags" type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" wire:model="logo" class="border border-gray-200 rounded p-2 w-full"
                    name="logo" />
            </div>

            @if ($this->logo)
                <div class="flex justify-center m-2   m-24">
                    <img src="{{ url('storage/' . $this->listing->logo) }}" alt="">

                </div>
            @else
                <div class="flex justify-center m-2   m-24">
                    <img src="{{ $logo->temporaryUrl() }}" alt="">
                </div>
            @endif

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="discription" rows="10"
                    placeholder="Include tasks, requirements, salary, etc" value="{{ $listing->discription }}" wire:model="discription"></textarea>
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Gig
                </button>

                <a href="/" class="text-black ml-4" wire:navigate> Back </a>
            </div>
        </form>
    </div>
</div>
