<body>
<style>
    #container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 12px;
        margin-top: 20px;
    }

    .gallery-item {
        width: 100%;
        height: 120px;
        background: #eee;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        transition: 0.2s;
    }

    .gallery-item:hover {
        transform: scale(1.03);
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .btn {
        padding: 10px 16px;
        background: #4a6bff;
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
        transition: 0.2s;
    }
</style>

<div id="container">
	<h1><?= $heading; ?></h1>
	<h2>Galeria</h2>
    <p>Bem vindo á galeria.</p>

    <!-- Galeria -->
    <div class="gallery">
        <div class="gallery-item"><img src="https://picsum.photos/300?2"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?2"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?3"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?4"></div>
        <div class="gallery-item"><img src="https://picsum.photos/300?5"></div>
    </div>

    <br />
    
    <a href="index" class="btn">Voltar á Home Page</a>
</div>
</body>
