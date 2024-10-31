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
            padding-top: 40px;
            display: flex;
            flex-direction: row;
            margin: 0;
            position: relative;
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
        /* Sidebar */
        .sidebar {
            height: 100%; /* Full-height */
            width: 250px; /* Width of the sidebar */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */ 
            top: 0; /* Stay at the top */
            left: -250px; /* Initially hidden */
            background-color: #000; /* Black background */
            overflow-x: hidden; /* Disable horizontal scroll */
            transition: 0.5s; /* Transition effect */
            padding-top: 60px; /* Place the menu below the top */
        }

        .sidebar a {
            padding: 10px 15px; /* Padding for links */
            text-decoration: none; /* No underline */
            font-size: 25px; /* Larger font size */
            color: white; /* White text */
            display: block; /* Make links appear below each other */
            transition: 0.3s; /* Transition effect for hover */
        }

        .sidebar a:hover {
            background-color: #575757; /* Darker background on hover */
        }
        /* Hamburger menu button */
        .hamburger {
            font-size: 30px; /* Size of the hamburger icon */
            cursor: pointer; /* Pointer cursor on hover */
            position: absolute; /* Position it at the top right */
            top: 15px; /* Distance from top */
            right: 15px; /* Distance from right */
            z-index: 2; /* Sit above sidebar */
            color: black; /* Black color for hamburger */
        }
    </style>
</head>
<body>
    <!-- Hamburger Menu -->
    <div class="hamburger" onclick="toggleSidebar()">&#9776;</div>

    <!-- Sidebar -->
    <div class="sidebar" id="mySidebar">
        <a href="<?= base_url('/') ?>">Form Tamu</a>
        <a href="<?= base_url('/capture') ?>">Capture</a>
        <a href="<?= base_url('/datatamu') ?>">List Tamu</a>
        <a href="<?= base_url('/rundown') ?>">Rundown</a>
        <a href="<?= base_url('/about') ?>">About</a>
        <a href="<?= base_url('/roles') ?>">Data Panitia</a>
        <a href="<?= base_url('/warning') ?>">Pesan Darurat</a>
        <a href="<?= base_url('/warning') ?>">Pesan Tamu</a>
    </div>
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
                <!-- <button id="mail" class="btn btn-danger"> Mail </button> -->
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
<?php

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
        // Function to toggle sidebar visibility
        function toggleSidebar() {
            const sidebar = document.getElementById("mySidebar");
            if (sidebar.style.left === "0px") {
                sidebar.style.left = "-250px"; // Hide the sidebar
            } else {
                sidebar.style.left = "0px"; // Show the sidebar
            }
        }
    </script>
</body>
</html>
