<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <x-loading-indicator/>
    <div class="rounded-full overflow-hidden bg-gray-200 w-32 h-32 mx-auto">
        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" alt="Uploaded Image" class="w-full h-full object-cover">
        @endif
    </div>

    <form wire:submit.prevent="updatedImage" class="mt-4 space-y-4">
        <div>
            <label for="image" class="block text-sm font-medium text-gray-700">Choose an image</label>
            <input type="file" id="image" wire:model="image" accept="image/*" class="mt-1">
            @error('image') <p class="mt-2 text-sm text-red-600">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Upload Image</button>
    </form>
</div>
