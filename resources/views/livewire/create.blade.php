 <div class="mx-4">
     <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
         <header class="text-center">
             <h2 class="text-2xl font-bold uppercase mb-1">
                 Create a Gig
             </h2>
             <p class="mb-4">Post a gig to find a developer</p>
         </header>
         {{-- wire:submit.prevent --}}
         <form wire:submit="store" enctype="multipart/form-data">
             <div class="mb-6">
                 <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                 <input type="text" class="border border-gray-200 rounded p-2 w-full" wire:model="company"
                     name="company" />
                 @error('company')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
             </div>

             <div class="mb-6">
                 <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                 <input type="text" class="border border-gray-200 rounded p-2 w-full"
                     name="title"wire:model="title" placeholder="Example: Senior Laravel Developer" />
                     @error('title')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
             </div>

             <div class="mb-6">
                 <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                 <input type="text" class="border border-gray-200 rounded p-2 w-full"
                     name="location"wire:model="location" placeholder="Example: Remote, Boston MA, etc" />
                       @error('location')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
             </div>

             <div class="mb-6">
                 <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                 <input type="text" class="border border-gray-200 rounded p-2 w-full"
                     name="email"wire:model="email" />
                       @error('email')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
             </div>

             <div class="mb-6">
                 <label for="website" class="inline-block text-lg mb-2">
                     Website/Application URL
                 </label>

                 <input type="text" class="border border-gray-200 rounded p-2 w-full"
                     name="website"wire:model="website" />
                       @error('website')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
             </div>

             <div class="mb-6">
                 <label for="tags" class="inline-block text-lg mb-2">
                     Tags (Comma Separated)
                 </label>
                 <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"wire:model="tags"
                     placeholder="Example: Laravel, Backend, Postgres, etc" />
                      @error('tags')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
             </div>

             <div class="mb-6">
                 <label for="logo" class="inline-block text-lg mb-2">
                     Company Logo
                 </label>
                 <input type="file" class="border border-gray-200 rounded p-2 w-full"
                     name="logo"wire:model="logo" />
                       @error('logo')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
                 @if ($logo)
                     <div class="flex justify-center m-2 ">
                        <img src="{{ $logo->temporaryUrl()}}" alt="" class="border border-2 border-red-700 w-24">
                     </div>
                 @endif
             </div>

             <div class="mb-6">
                 <label for="discription" class="inline-block text-lg mb-2">
                     Job Description
                 </label>
                 <textarea class="border border-gray-200 rounded p-2 w-full" name="discription" rows="10"
                     placeholder="Include tasks, requirements, salary, etc" wire:model="discription"></textarea>
                        @error('discription')
                     <span class="error bg-red-400 rounded px-1 border border-1 border-black">{{ $message }}</span>
                 @enderror
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
