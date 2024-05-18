<div>
    <form wire:submit=" delete" method="Post">
        @csrf

        @method('')
        <input type="hidden" name="listing_id" value="{{ $listing->id }}">
        <button class="text-red-500" type="submit">DELETE</button>
    </form>
</div>
