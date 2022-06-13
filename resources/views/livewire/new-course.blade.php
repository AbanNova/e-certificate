<div>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Course') }}
            </h2>
        </x-slot>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <br/>
    <br/>
    <div>
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
        <form>
          <div class="form-group mb-6">
            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Course Name</label>
            <input wire:model="name" type="text" class="form-control
              block
              w-full
              px-3
              py-1.5
              text-base
              font-normal
              text-gray-700
              bg-white bg-clip-padding
              border border-solid border-gray-300
              rounded
              transition
              ease-in-out
              m-0
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInputEmail1"
              aria-describedby="courseHelp" placeholder="Enter Course Name">
            <small id="courseHelp" class="block mt-1 text-xs text-gray-600">make it unique</small>
          </div>

          <button wire:click="store" class="
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out">create</button>
        </form>
        <button wire:click="home"
                class="
    w-full
    px-6
    py-2.5
    bg-blue-600
    text-white
    font-medium
    text-xs
    leading-tight
    uppercase
    rounded
    shadow-md
    hover:bg-blue-700 hover:shadow-lg
    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    active:bg-blue-800 active:shadow-lg
    transition
    duration-150
    ease-in-out">Home</button>
      </div>
    </div>
    </x-app-layout>
</div>
