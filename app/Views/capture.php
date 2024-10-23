<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capture The Moment!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #ffffff; /* White background */
            color: #000000; /* Black text color */
        }
        #video {
            width: 100%;
            max-width: 750px;
            border: 2px solid #000000; /* Black border */
            border-radius: 5px;
        }
        #canvas {
            display: none; /* Hide the canvas by default */
        }
        .modal-content {
            background-color: #ffffff; /* White background for modal */
            border: 1px solid #000000; /* Black border for modal */
        }
        .modal-header, .modal-footer {
            background-color: #f8f9fa; /* Light grey background for header and footer */
        }
        .btn-primary {
            background-color: #000000; /* Black background for primary buttons */
            border: none; /* Remove border */
            color: #ffffff; /* White text for buttons */
        }
        .btn-primary:hover {
            background-color: #555555; /* Dark grey on hover */
        }
        .btn-secondary {
            background-color: #ffffff; /* White background for secondary button */
            border: 1px solid #000000; /* Black border for secondary button */
            color: #000000; /* Black text for button */
        }
        .btn-secondary:hover {
            background-color: #f0f0f0; /* Light grey on hover */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center" style="padding-bottom: 30px;">Camera Capture</h1>
    <div class="text-center">
        <video id="video" autoplay></video>
        <div class="mt-3">
            <button id="capture" class="btn btn-primary">Capture Image</button>
        </div>
    </div>
    <canvas id="canvas"></canvas>
</div>

<!-- Modal for displaying captured image -->
<div class="modal fade" id="captureModal" tabindex="-1" role="dialog" aria-labelledby="captureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="captureModalLabel">Captured Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img id="preview" class="img-fluid" alt="Captured Photo">
            </div>
            <div class="modal-footer">
                <button id="retake" class="btn btn-secondary">Retake</button>
                <button id="save" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const context = canvas.getContext('2d');

    // Get access to the camera
    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function(stream) {
            video.srcObject = stream;
        })
        .catch(function(error) {
            console.error("Error accessing the camera: ", error);
        });

    // Capture the image from the video
    $('#capture').on('click', function() {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        context.drawImage(video, 0, 0);
        
        const imageData = canvas.toDataURL('image/png');
        $('#preview').attr('src', imageData);
        $('#captureModal').modal('show'); // Show the modal
    });

    // Retake the image
    $('#retake').on('click', function() {
        $('#captureModal').modal('hide'); // Hide the modal
    });

    // Save the image (you can customize this functionality)
    $('#save').on('click', function() {
        const imageData = $('#preview').attr('src');
        const link = document.createElement('a');
        link.href = imageData;
        link.download = 'captured_image.png';
        link.click();
    });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
