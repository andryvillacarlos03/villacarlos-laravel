<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FruityPop - Loading Freshness...</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <style>
    :root {
      --green-light: #b8ff8e;
      --green-mid: #72c857;
      --green-dark: #257c38;
      --white: #ffffff;
      --glass: rgba(255, 255, 255, 0.15);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(-45deg, var(--green-dark), var(--green-mid), var(--green-light));
      background-size: 400% 400%;
      animation: gradientFlow 10s ease infinite;
      overflow: hidden;
      color: var(--white);
    }

    /* === Splash Container === */
    #splash-screen {
      position: fixed;
      inset: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      text-align: center;
      animation: fadeOut 4.2s ease-in-out forwards;
    }

    .splash-card {
      background: var(--glass);
      backdrop-filter: blur(12px);
      border-radius: 25px;
      padding: 3.5rem 5rem;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.25);
      animation: floatUp 1.2s ease-out;
      transition: transform 0.3s ease;
    }

    .splash-card:hover {
      transform: scale(1.03);
    }

    /* === Logo Animation === */
    .splash-logo {
      font-size: 4.5rem;
      margin-bottom: 1rem;
      color: var(--white);
      text-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
      animation: rotateFruit 5s linear infinite;
    }

    /* === Title === */
    h1 {
      font-size: 2.6rem;
      font-weight: 700;
      letter-spacing: 1px;
      background: linear-gradient(to right, #ffffff, #eaffea);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: glow 2.5s ease-in-out infinite alternate;
    }

    /* Tagline */
    .tagline {
      font-size: 1.1rem;
      opacity: 0.9;
      margin: 0.6rem 0 1.8rem;
    }

    /* Loader */
    .loader {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
    }

    .loader span {
      width: 14px;
      height: 14px;
      background: var(--white);
      border-radius: 50%;
      opacity: 0.9;
      animation: bounce 1.3s infinite ease-in-out;
    }

    .loader span:nth-child(2) {
      animation-delay: 0.2s;
    }

    .loader span:nth-child(3) {
      animation-delay: 0.4s;
    }

    /* Message */
    .message {
      margin-top: 1.5rem;
      font-size: 0.95rem;
      font-style: italic;
      color: rgba(255, 255, 255, 0.85);
      animation: fadeText 3s ease-in-out infinite alternate;
    }

    /* Footer */
    footer {
      position: absolute;
      bottom: 1rem;
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.7);
      letter-spacing: 0.5px;
    }

    /* === Animations === */
    @keyframes gradientFlow {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    @keyframes rotateFruit {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    @keyframes glow {
      from { text-shadow: 0 0 10px #fff, 0 0 20px #baffb5; }
      to { text-shadow: 0 0 25px #fff, 0 0 40px #caffb7; }
    }

    @keyframes bounce {
      0%, 80%, 100% { transform: scale(0); }
      40% { transform: scale(1); }
    }

    @keyframes floatUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeText {
      from { opacity: 0.6; }
      to { opacity: 1; }
    }

    @keyframes fadeOut {
      0%, 85% { opacity: 1; }
      100% { opacity: 0; visibility: hidden; }
    }
  </style>
</head>
<body>
  <div id="splash-screen">
    <div class="splash-card">
      <i class="fa-solid fa-apple-whole splash-logo"></i>
      <h1>FruityPop</h1>
      <p class="tagline">Refreshing goodness. Every click. 🍏</p>

      <div class="loader">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <p class="message">Loading your freshness...</p>
    </div>

    <footer>© 2025 FruityPop. Crafted with 🍃 in Laravel.</footer>
  </div>

  <!-- Redirect after animation -->
  <script>
    setTimeout(() => {
      window.location.href = "{{ route('page.landing') }}";
    }, 4200);
  </script>
</body>
</html>
