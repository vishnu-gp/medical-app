<div>
    <section class="relative py-6 bg-white bg-gray-200 min-w-screen animation-fade animation-delay">
        <div class="container h-full max-w-5xl mx-auto overflow-hidden rounded-lg shadow">
            <div class="h-full sm:flex">
                <div class="flex items-center justify-center w-full p-10 bg-white">
                    <form wire:submit.prevent="logBp" class="w-full">
                        @csrf
                        <div class="py-3">
                            @error('systolic')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                            <input wire:model="systolic" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Systolic Pressure" name="systolic" value="" />
                        </div>
                        <div class="pb-3">
                            @error('diastolic')
                                <p class="text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                            <input wire:model="diastolic" class="w-full px-5 py-3 border border-gray-400 rounded-lg outline-none focus:shadow-outline" type="text" placeholder="Diastolic Pressure" name="diastolic" value="" />
                        </div>
                        <div class="pt-3">
                            <button class="flex px-6 py-3 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 hover:text-white focus:outline-none focus:shadow-outline focus:border-indigo-300" type="submit">
                                <span class="self-center float-left ml-3 text-base font-medium">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>