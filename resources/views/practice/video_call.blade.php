<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('title.main_title') }}/ビデオ通話</title>
</head>
<body>
    <video id="myVideo" width="400" height="300" autoplay="1" src=""></video>

    <script type="text/javascript">
        navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia
        window.URL = window.URL || window.webkitURL;

        let video = document.getElementById('myVideo');
        let localStream = null;
        navigator.getUserMedia({video: true, audio:false},
            function(stream){
                console.log(stream);
                video.srcObject = stream;
            },function(err){
                console.log(err);
            }
        );
    </script>
</body>
</html>