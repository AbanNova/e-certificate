<div>
    <x-app-layout>
        <br />

        <div class="flex justify-center">
            <div class="rounded-lg shadow-lg bg-white max-w-sm">

                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js">
                </script>
                <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
                <video id="preview"></video>
                <script type="text/javascript">
                    let scanner = new Instascan.Scanner({
                        video: document.getElementById('preview')
                    });
                    scanner.addListener('scan', function(content) {

                        Livewire.emit('scanning', content);
                    });
                    Instascan.Camera.getCameras().then(function(cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                        } else {
                            console.error('No cameras found.');
                        }
                    }).catch(function(e) {
                        console.error(e);
                    });
                </script>
            </div>
        </div>
    </x-app-layout>
</div>
