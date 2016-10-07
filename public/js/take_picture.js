$(document).ready(function(){

    function hasGetUserMedia() {
        return !!(navigator.getUserMedia || navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia || navigator.msGetUserMedia);
    }

    if (hasGetUserMedia()) {
        var canvas = document.getElementById("canvas"),
            context = canvas.getContext("2d"),
            video = document.getElementById("video"),
            videoParams = { "video": true },
            errorCallback = function(error) {
                console.log("Erreur Capture Video: ", error.code);
            };

        if(navigator.getUserMedia) { //Standard
            navigator.getUserMedia(videoParams, function(stream) {
                video.src = stream;
                video.play();
            }, errorCallback);
        } else if(navigator.webkitGetUserMedia) { //Webkit
            navigator.webkitGetUserMedia(videoParams, function(stream){
                video.src = window.webkitURL.createObjectURL(stream);
                video.play();
            }, errorCallback);
        } else if(navigator.mozGetUserMedia) { //Mozilla
            navigator.mozGetUserMedia(videoParams, function(stream){
                video.src = window.URL.createObjectURL(stream);
                video.play();
            }, errorCallback);
        } else if(navigator.msGetUserMedia) { //IE
            navigator.msGetUserMedia(videoParams, function(stream){
                video.src = window.URL.createObjectURL(stream);
                video.play();
            }, errorCallback);
        }

        $("#snap").click(function() {
            context.drawImage(video, 0, 0, 640, 480);
            $("#image").attr('src', canvas.toDataURL());
        });

        $("#snap_black_white").click(function() {
            if($("#image").attr('src') != ""){
                var imageData = context.getImageData(0, 0, 640, 480);

                var pixels = imageData.data;
                var numPixels = pixels.length;

                context.clearRect(0, 0, 640, 480);

                for (var i = 0; i < numPixels; i++) {
                    var average = (pixels[i*4]+pixels[i*4+1]+pixels[i*4+2])/3;
                    pixels[i*4] = average; // Red
                    pixels[i*4+1] = average; // Green
                    pixels[i*4+2] = average; // Blue
                }

                context.putImageData(imageData, 0, 0);
                $("#image").attr('src', canvas.toDataURL());
            } else {
                alert("Il vous faut premièrement prendre une photo SVP !");
            }
        });

        $("#snap_inverse").click(function() {
            if($("#image").attr('src') != ""){
                var imageData = context.getImageData(0, 0, 640, 480);

                var pixels = imageData.data;
                var numPixels = pixels.length;

                context.clearRect(0, 0, 640, 480);

                for (var i = 0; i < numPixels; i++) {
                    pixels[i*4] = 255-pixels[i*4]; // Red
                    pixels[i*4+1] = 255-pixels[i*4+1]; // Green
                    pixels[i*4+2] = 255-pixels[i*4+2]; // Blue
                }

                context.putImageData(imageData, 0, 0);
                $("#image").attr('src', canvas.toDataURL());
            } else {
                alert("Il vous faut premièrement prendre une photo SVP !");
            }
        });

        $("#send_snap").click(function() {
            if($("#image").attr('src') != ""){
                var dataURL = canvas.toDataURL("image/png");
                var lastname = $('#lastName').val();
                var firstname = $('#firstName').val();

                $.ajax({
                    type: "post",
                    url:  "save_to_img.php",
                    data: {'img_data' : dataURL, 'lastName' : lastname, 'firstName' : firstname },
                    success: function(data){
                        alert('Enregistrement effectué !');
                    }
                });
            } else {
                alert("Il vous faut premièrement prendre une photo SVP !");
            }
        });

    } else {
        alert("getUserMedia() n'est pas supporté par votre navigateur !");
    }
});
