<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>


    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Gms | @yield('title')</title>


</head>

<body>



    <div class="container">
        <h1 class="text-center">Capture webcam image with php and jquery - pakainfo.com</h1>

        <form method="POST" action="{{ route('testcheck') }}" enctype="multipart/form-data">
            @csrf
            <div class="dsp row">
                <div class="col-md-6 dsp">
                    <div id="web_cam"></div>
                    <br />
                    <input type=button value="Take Snapshot" onClick="take_snapshot()">
                    <input type="hidden" name="image" class="image-tag">
                </div>
                <div class="dsp col-md-6">
                    <div id="response">Your main captured image will appear here...</div>
                </div>
                <div class="col-md-12 text-center">
                    <br />
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- simple here configuration part a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 500,
            height: 600,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
      
        Webcam.attach( '#web_cam' );
      
        function take_snapshot() {
            Webcam.snap( function(web_cam_data) {
                $(".image-tag").val(web_cam_data);
                document.getElementById('response').innerHTML = '<img src="'+web_cam_data+'"/>';
            } );
        }
    </script>



    {{-- Scripts --}}

    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>



</body>

</html>