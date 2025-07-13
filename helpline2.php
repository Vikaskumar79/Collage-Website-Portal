<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blinking Helpline Number</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        .helpline-container {
            text-align: center;
        }

        .helpline-text {
            font-size: 24px;
            color: #b30009;
            animation: blinker 1.5s linear infinite;
            font-weight: 600;
            display: inline-block;
        }

        .helpline-text:hover {
            color:#ff0000;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }

        .phone-icon {
            margin-right: 8px;
            color:  #b30009;
        }

    </style>
</head>
<body>
    <div class="helpline-container">
        <span class="helpline-text">
            Admission Help Line
            <i class="fas fa-phone phone-icon"></i>
            +91 9519113070
        </span>
    </div>
</body>
</html>
