<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Lutpiah Ainus Shiddik</title>
    <style>
    /* CSS untuk styling foto dan teks */
    .profile-container {
        text-align: center;
        margin-top: 20px;
    }

    .profile-img {
        width: 150px;
        /* ukuran foto */
        height: 150px;
        border-radius: 50%;
        /* membuat foto menjadi bulat */
        object-fit: cover;
        border: 3px solid #007bff;
        /* warna border */
    }

    .profile-name {
        font-size: 1.5em;
        font-weight: bold;
    }

    .profile-university {
        font-size: 1em;
        color: #555;
    }
    </style>
</head>

<body>

    <div class="profile-container">
        <!-- Foto Profil -->
        <img src="image/profil.jpeg" class="profile-img"
            alt="Foto Lutpiah Ainus Shiddik">

        <!-- Nama dan Universitas -->
        <h2 class="profile-name">Lutpiah Ainus Shiddik</h2>
        <p class="profile-university">Jl. maju, Kota mundur </p>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/upb 1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>UNIVERSITY</h5>
                    <p>universitas pelita bangsa.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/GEDUNG A.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>universsitas pelita bangsa </h5>
                    <p>GEDUNG B </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/UPB CIKARANG.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>universitas pelita bangsa</h5>
                    <p>GEDUNG A </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>