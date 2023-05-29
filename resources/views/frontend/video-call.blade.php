<!DOCTYPE html>
<html>
<head>
    <title>Video Call</title>
    <script src="https://cdn.simplewebrtc.com/latest-v3.js"></script>
    <style>
        #localVideo {
            width: 320px;
            height: 240px;
            margin-bottom: 10px;
        }

        #remoteVideos video {
            width: 320px;
            height: 240px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Video Call</h1>
    <div id="localVideo"></div>
    <div id="remoteVideos"></div>

    <script>
        const webrtc = new SimpleWebRTC({
            localVideoEl: 'localVideo',
            remoteVideosEl: 'remoteVideos',
            autoRequestMedia: true
        });

        webrtc.on('readyToCall', function () {
            webrtc.joinRoom('telegerne');
        });
    </script>
</body>
</html>
