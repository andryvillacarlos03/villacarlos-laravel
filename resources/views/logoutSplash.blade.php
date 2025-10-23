<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Splash Screen</title>
    <style>
        /* Splash Screen Styles */
        #splash-screen {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensures it's on top */
            animation: fadeOut 3s forwards;
            font-family: 'Arial', sans-serif;
            text-align: center;
        }

        /* Splash screen quote styling */
        #splash-screen h1 {
            font-size: 2rem;
            color: #fff;
            font-weight: bold;
            margin: 0;
        }

        /* Quote styling */
        #splash-screen blockquote {
            font-style: italic;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        /* Fade-out Animation */
        @keyframes fadeOut {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                visibility: hidden;
            }
        }

        /* Main content - hidden initially */
        .content {
            display: none;
            text-align: center;
            padding: 20px;
        }

        /* Optional: Fade in effect for main content */
        .fade-in {
            animation: fadeIn 1s forwards;
        }

        /* Fade-in animation for the content */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <!-- Splash Screen -->
    <div id="splash-screen">
        <div>
            <h1>Welcome to My Laravel App</h1>
            <blockquote>
                "The biggest battle is the war against ignorance." <br>
                - Mustafa Kemal Atatürk
            </blockquote>
        </div>
    </div>

    <script>
         setTimeout(() => {
             window.location.href= "{{route('page.welcome')}}"
         }, 3000);
    </script>
</body>
</html>
