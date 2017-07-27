@extends('app')

@section('titulopagina')
    Novo
@endsection


@section('content')

    <style>
        .red-line {
            background-color: red;
            height: 2px;
            position: absolute;
            width: 90%;
            top: 50%;
            left: 5%;
        }
    </style>


    <div class="row">
        <div class="col-md-12">
            <div style="width: 100%; position:relative;">
                <div class="red-line"></div>
                <video autoplay style="width: 100%"></video>
                <script>
                    var onFailSoHard = function (e) {
                        console.log('Reeeejected!', e);
                    };
                    console.log(MediaStreamTrack.getSources);
                    // Not showing vendor prefixes.
                    navigator.getUserMedia({video: true, audio: false}, function (localMediaStream) {
                        console.log(localMediaStream);
                        var video = document.querySelector('video');
                        video.src = window.URL.createObjectURL(localMediaStream);

                        // Note: onloadedmetadata doesn't fire in Chrome when using it with getUserMedia.
                        // See crbug.com/110938.
                        video.onloadedmetadata = function (e) {
                            // Ready to go. Do some stuff.
                        };
                    }, onFailSoHard);
                </script>
            </div>
        </div>

        <div class="col-xs-12">

            <form action="" method="post" role="form" style="text-align: center">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input type="text" name="name" id="inputID" class="form-control" value="" required="required" style="height: 60px; font-size: 1.5em;">
                </div>

                <button type="submit" class="btn btn-success" style="font-size: 2em;">Registrar</button>
            </form>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $('#inputID').val("8362000000 5 51140111000 8 00101020174 5 76247669536 1");
            }, 5000);
        });
    </script>
@endsection


