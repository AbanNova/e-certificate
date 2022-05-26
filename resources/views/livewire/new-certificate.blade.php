<div>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('New Certificate') }}
            </h2>
        </x-slot>
        {{-- Nothing in the world is as soft and yielding as water. --}}
        <br />
        <br />

        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <form wire:submit.prevent="store">
                <div class="form-group mb-6">
                    <label for="exampleInputEmail2" class="form-label inline-block mb-2 text-gray-700">Name</label>
                    <input wire:model="name" type="text"
                        class="form-control
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Name">
                </div>
                <div class="form-group mb-6">
                    <label for="exampleInputPassword2" class="form-label inline-block mb-2 text-gray-700">Serial
                        Number</label>
                    <input wire:model="sn" type="text"
                        class="form-control block
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
              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleInputPassword2" placeholder="Serial Number">
                </div>
                <div class="mb-3 xl:w-96">
                    <select
                    wire:model='course_id'
                        class="form-select appearance-none
                      block
                      w-full
                      px-3
                      py-1.5
                      text-base
                      font-normal
                      text-gray-700
                      bg-white bg-clip-padding bg-no-repeat
                      border border-solid border-gray-300
                      rounded
                      transition
                      ease-in-out
                      m-0
                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        aria-label="Default select example">
                        <option selected>select course</option>
               @foreach ($courses as $c )
               <option value="{{$c->id}}">{{$c->name}}</option>
               @endforeach
                    </select>
                </div>
                <button type="submit"
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
            ease-in-out">create</button>

            </form>
        </div>

    </x-app-layout>
</div>
