 <div class="mx-4">
     <div class="bg-gray-50 border border-gray-200 p-10 rounded">
         <header>
             <h1 class="text-3xl text-center font-bold my-6 uppercase">
                 Manage Gigs
             </h1>
         </header>

         <table class="w-full table-auto rounded-sm">
             <tbody>

                 @foreach ($listings as $item)
                     <tr class="border-gray-300">
                         <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                             <a href="show.html">
                                 {{ $item->title }}
                             </a>
                         </td>
                         <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">

                                  <a href="{{url('/Listing/edit/'.$item->id)}} " wire:navigate class="text-blue-400 px-6 py-2 rounded-xl">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </a>
                         </td>
                         <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                               @livewire('delete', ["listing"=>$item,"id"=>$item->id])
                         </td>
                     </tr>
                 @endforeach


             </tbody>
         </table>
     </div>
 </div>
