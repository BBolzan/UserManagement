<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: #ffffff;
            color: #721c24;
            text-align: center;
            padding: 50px;
        }
        .error-container {
            border: 1px solid #cccccc;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            display: inline-block;
        }
        .error-title {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
        }
        .error-message {
            margin-top: 10px;
            font-size: 18px;
            color: #333333;
        }

        .error-image {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-image">
            <img src="https://www.svgrepo.com/show/447994/error.svg" alt="Maintenance Image" width="100" height="100">
        </div>
        <div class="error-title">An Error Occurred</div>
        <div class="error-message"><?php echo htmlspecialchars($errorMessage); ?></div>
    </div>
</body>
</html>