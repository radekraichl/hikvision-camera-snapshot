<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera Stream</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Camera image centered on the screen -->
    <img src="camera.php" alt="Live Camera" id="camera">

    <script>
        // Auto-refresh the camera image every second
        setInterval(() => {
            document.getElementById('camera').src = 'camera.php?t=' + new Date().getTime();
        }, 1000);
    </script>
</body>
</html>
