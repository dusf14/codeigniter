<body>
<style>
    #container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
    }

    .services {
        margin-top: 20px;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 16px;
    }

    .service-card {
        background: #ffffff;
        border-radius: 10px;
        padding: 16px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        transition: 0.2s;
        cursor: pointer;
    }

    .service-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    }

    .service-title {
        font-size: 18px;
        font-weight: bold;
        margin: 0 0 6px;
    }

    .service-desc {
        font-size: 14px;
        color: #555;
        margin: 0;
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
	<h2>Serviços</h2>

    <!-- Lista de Serviços -->
    <div class="services">
        <div class="service-card">
            <div class="service-title">Consultoria</div>
            <p class="service-desc">Aconselhamento profissional personalizado.</p>
        </div>

        <div class="service-card">
            <div class="service-title">Desenvolvimento Web</div>
            <p class="service-desc">Criação de websites modernos e dinâmicos.</p>
        </div>

        <div class="service-card">
            <div class="service-title">Design Gráfico</div>
            <p class="service-desc">Identidade visual, banners, flyers e mais...</p>
        </div>

        <div class="service-card">
            <div class="service-title">Suporte Técnico</div>
            <p class="service-desc">Assistência remota ou presencial para o seu sistema.</p>
        </div>
    </div>

    <br />
    
    <a href="index" class="btn">Voltar á Home Page</a>
</div>
</body>
