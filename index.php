<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web Kelompok - Elegant Pink Edition</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, #fff5f7, #fce4ec);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            color: #5d4037;
        }

        .header-container {
            text-align: center;
            margin-bottom: 60px;
            width: 100%;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.5em;
            font-weight: 900;
            margin-bottom: 10px;
            background: linear-gradient(to right, #ad1457, #f64781, #ad1457);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 2px;
            position: relative;
            display: inline-block;
        }

        h1::after {
            content: '';
            display: block;
            width: 60%;
            height: 4px;
            background: #f06292;
            margin: 10px auto 0;
            border-radius: 50px;
            opacity: 0.6;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            max-width: 1200px;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            width: 320px;
            padding: 20px; 
            text-align: center;
            transition: all 0.4s ease;
            box-shadow: 0 10px 25px rgba(216, 27, 96, 0.1);
            border: 1px solid #f8bbd0;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(216, 27, 96, 0.2);
        }

        .image-container {
            width: 100%; 
            height: 400px; 
            margin-bottom: 20px;
            overflow: hidden;
            border-radius: 15px; 
            border: 3px solid #f48fb1;
            background-color: #fce4ec;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover; 
            display: block;
            transition: transform 0.5s ease;
        }

        .card:hover img {
            transform: scale(1.05);
        }

        .card h3 {
            margin: 10px 0 5px;
            color: #ad1457;
            font-size: 1.2em;
            font-weight: 700;
        }

        .badge {
            display: inline-block;
            background: #f06292;
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.75em;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .description {
            font-size: 0.9em;
            line-height: 1.6;
            color: #7d5a5a;
            margin-bottom: 20px;
            text-align: justify;
            hyphens: auto;
            flex-grow: 1;
        }

        .info-box {
            background: #fff0f5;
            border-radius: 12px;
            padding: 15px;
            border: 1px dashed #f48fb1;
        }

        .info-box p {
            margin: 0 0 10px 0;
            font-size: 0.85em;
            font-weight: 700;
            color: #d81b60;
        }

        /* FITUR TOMBOL BARU */
        .button-group {
            display: flex;
            gap: 8px;
            justify-content: center;
        }

        .btn {
            padding: 8px 10px;
            border: none;
            border-radius: 8px;
            font-family: 'Montserrat', sans-serif;
            font-size: 0.7em;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            flex: 1;
        }

        .btn-fav {
            background: #f06292;
            color: white;
        }

        .btn-web {
            background: transparent;
            color: #ad1457;
            border: 1px solid #f06292;
        }

        .btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(240, 98, 146, 0.3);
        }
    </style>
</head>
<body>

    <div class="header-container">
        <h1>Kelompok "mosok e"</h1>
    </div>

    <div class="container">
        
        <div class="card">
            <div class="image-container">
                <img src="images/anggota1.jpeg" alt="Anggota 1">
            </div>
            <h3>Kendra Respati Maheswara Ugroho</h3>
            <div><span class="badge">XI RPL 8</span></div>
            <p class="description">
                Siswa yang memiliki ketertarikan tinggi pada dunia pemrograman web. Selalu bersemangat untuk mempelajari teknologi baru, terutama dalam hal desain antarmuka yang estetis.
            </p>
            <div class="info-box">
                <p>No Absen: 18</p>
                <div class="button-group">
                    <button class="btn btn-fav" onclick="tampilFavorit('Kendra', 'UI/UX Design & Kopi Hitam')">Favorit</button>
                    <a href="#" class="btn btn-web">Website</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="image-container">
                <img src="images/anggota2.jpeg" alt="Anggota 2">
            </div>
            <h3>Muhammad Ihsan Ufiq</h3>
            <div><span class="badge">XI RPL 8</span></div>
            <p class="description">
                Berfokus pada pengembangan sisi belakang layar atau backend. Memiliki kemampuan analisis yang kuat dalam memecahkan masalah logika serta sangat teliti mengelola basis data.
            </p>
            <div class="info-box">
                <p>No Absen: 22</p>
                <div class="button-group">
                    <button class="btn btn-fav" onclick="tampilFavorit('Ihsan', 'Backend Engineering & Gaming')">Favorit</button>
                    <a href="#" class="btn btn-web">Website</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="image-container">
                <img src="images/anggota3.jpeg" alt="Anggota 3">
            </div>
            <h3>Muchammad Rasya Arkhan Hidayat</h3>
            <div><span class="badge">XI RPL 8</span></div>
            <p class="description">
                Memiliki jiwa kreatif yang dituangkan dalam desain visual dan konten multimedia. Berperan aktif dalam memastikan setiap proyek memiliki aspek estetika yang menarik.
            </p>
            <div class="info-box">
                <p>No Absen: 21</p>
                <div class="button-group">
                    <button class="btn btn-fav" onclick="tampilFavorit('Rasya', 'Digital Art & Photography')">Favorit</button>
                    <a href="#" class="btn btn-web">Website</a>
                </div>
            </div>
        </div>

    </div>

    <script>
        function tampilFavorit(nama, hobi) {
            alert("✨ Profil Favorit " + nama + " ✨\n\nHal yang disukai: " + hobi);
        }
    </script>

</body>
</html>