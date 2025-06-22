<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TrieternalX Bistro</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body,
    html {
      font-family: 'Segoe UI', sans-serif;
      height: 100%;
      background: linear-gradient(135deg, #000428, #004e92);
      color: white;
      overflow: hidden;
    }

    .hero {
      position: relative;
      height: 100vh;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero-content {
      z-index: 2;
      max-width: 800px;
      padding: 2rem;
      opacity: 0;
      transform: translateY(20px);
      transition: all 0.8s ease;
    }

    .hero-content.active {
      opacity: 1;
      transform: translateY(0);
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
      animation: fadeInDown 1s ease;
    }

    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
      animation: fadeInUp 1s ease;
    }

    .actions {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn {
      padding: 0.8rem 1.6rem;
      background: #00bcd4;
      color: white;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      transition: background 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 15px rgba(0, 188, 212, 0.4);
    }

    .btn:hover {
      background: #00acc1;
      transform: scale(1.05);
    }

    .btn-outline {
      background: transparent;
      border: 2px solid #00bcd4;
      color: #00bcd4;
    }

    .btn-outline:hover {
      background: #00bcd4;
      color: white;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Particle-Like Glowing Dots */
    .particle {
      position: absolute;
      width: 10px;
      height: 10px;
      background: rgba(0, 255, 255, 0.5);
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(0, 255, 255, 0.6);
      animation: floatParticle 8s infinite ease-in-out alternate;
    }

    @keyframes floatParticle {
      0% {
        transform: translateY(0) scale(1);
        opacity: 1;
      }

      100% {
        transform: translateY(-100vh) scale(0.5);
        opacity: 0;
      }
    }

    .particle:nth-child(1) {
      left: 10%;
      animation-delay: 0s;
    }

    .particle:nth-child(2) {
      left: 30%;
      animation-delay: 2s;
    }

    .particle:nth-child(3) {
      left: 50%;
      animation-delay: 4s;
    }

    .particle:nth-child(4) {
      left: 70%;
      animation-delay: 1s;
    }

    .particle:nth-child(5) {
      left: 90%;
      animation-delay: 3s;
    }
  </style>
</head>

<body>

  <div class="hero">
    <!-- Glowing floating particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>

    <div class="overlay"></div>

    <div class="hero-content">
      <h1>TrieternalX Bistro</h1>
      <p>Cari, Pilih, Nikmati – Semua Dalam Satu Tempat</p>
      <div class="actions">
        <a href="../trieternalx/templates/login.html" class="btn">Login</a>
        <a href="../trieternalx/templates/register.html" class="btn btn-outline">Register</a>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const hero = document.querySelector(".hero-content");
      hero.classList.add("active");
    });
  </script>

</body>

</html>