<div>
    <x-guest-layout>
        <br />
        {{-- Because she competes with no one, no one can compete with her. --}}
        <div class="flex flex-col justify-center">

            @if (Session::has('err'))
                <div class="bg-red-600 shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block mb-3"
                    id="static-example" role="alert" aria-live="assertive" aria-atomic="true" data-mdb-autohide="false">
                    <div
                        class="bg-red-600 flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-red-500 rounded-t-lg">
                        <p class="font-bold text-white flex items-center">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times-circle"
                                class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512">
                                <path fill="currentColor"
                                    d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                </path>
                            </svg>
                            Sorry
                        </p>
                        <div class="flex items-center">
                            <p class="text-white opacity-90 text-xs">Not Found</p>
                            <button type="button"
                                class="btn-close btn-close-white box-content w-4 h-4 ml-2 text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-white hover:opacity-75 hover:no-underline"
                                data-mdb-dismiss="toast" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="p-3 bg-red-600 rounded-b-lg break-words text-white">
                        {{ Session::get('err') }}
                    </div>
                </div>
            @endif
        </div>
        <div class="flex justify-center">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">
                @if (Session::has('msg'))
                    <a href="#!">

                        <div class="bg-green-600 shadow-lg mx-auto w-96 max-w-full text-sm pointer-events-auto bg-clip-padding rounded-lg block mb-3"
                            id="static-example" role="alert" aria-live="assertive" aria-atomic="true"
                            data-mdb-autohide="false">
                            <div
                                class="bg-blue-600 flex justify-between items-center py-2 px-3 bg-clip-padding border-b border-green-500 rounded-t-lg">
                                <p class="font-bold text-white flex items-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle"
                                        class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path fill="currentColor"
                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                        </path>
                                    </svg>
                                    Great!
                                </p>
                                <div class="flex items-center">
                                    <p class="text-white opacity-90 text-xs">Founded</p>
                                    <button type="button"
                                        class="btn-close btn-close-white box-content w-4 h-4 ml-2 text-white border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-white hover:opacity-75 hover:no-underline"
                                        data-mdb-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="p-3 bg-green-500 rounded-b-lg break-words text-white">
                                {!! Session::get('img') !!}
                            </div>
                            <br />

                        </div>
                    </a>
                @else
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ url('img/cer.png') }}" alt="" />

                    </a>
                @endif
                <div class="p-6">
                    <h5 class="text-gray-900 text-xl font-medium mb-2">Certificate Valiator</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Please enter your certificate's serial number or use QRCode
                    </p>
                    <div class="mb-3 xl:w-96">
                        <label for="exampleFormControlInput2"
                            class="form-label inline-block mb-2 text-gray-700 text-xl">Serial Number</label>
                        <input wire:model="sn" type="text"
                            class="
                    form-control
                    block
                    w-full
                    px-4
                    py-2
                    text-xl
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                  "
                            id="exampleFormControlInput2" placeholder="Serial Number [SN]" />
                    </div>
                    <br />
                 
                    <button wire:click='findBySN' type="button"
                        class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Validate</button>
                &nbsp;
                &nbsp;
                <button wire:click='findByQR' type='button'  class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"> Scan QRCode</button>
                    </div>
            </div>
        </div>
    </x-guest-layout>
</div>
