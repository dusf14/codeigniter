<body>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f5f6f7;
    }

    #container {
        max-width: 900px;
        margin: 0 auto;
        padding: 20px;
    }

    .contact-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 16px;
        margin-top: 20px;
    }

    .contact-card {
        background: #fff;
        padding: 16px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
        transition: 0.2s;
    }

    .contact-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.12);
    }

    .contact-name {
        font-size: 18px;
        font-weight: bold;
        margin: 0 0 6px;
    }

    .contact-info {
        font-size: 14px;
        color: #555;
        margin: 2px 0;
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

    <h2>Contactos</h2>

    <div class="contact-list">

        <div class="contact-card">
            <div class="contact-name">João Silva</div>
            <p class="contact-info">Telefone: +351 912 345 001</p>
            <p class="contact-info">Endereço de Email: joao.silva@gmail.com</p>
        </div>

        <div class="contact-card">
            <div class="contact-name">Maria Ferreira</div>
            <p class="contact-info">Telefone: +351 913 200 552</p>
            <p class="contact-info">Endereço de Email: maria.ferreira@gmail.com</p>
        </div>

        <div class="contact-card">
            <div class="contact-name">Carlos Mendes</div>
            <p class="contact-info">Telefone: +351 917 908 244</p>
            <p class="contact-info">Endereço de Email: carlos.mendes@gmail.com</p>
        </div>

        <div class="contact-card">
            <div class="contact-name">Ana Duarte</div>
            <p class="contact-info">Telefone: +351 910 456 788</p>
            <p class="contact-info">Endereço de Email: ana.duarte@gmail.com</p>
        </div>
    </div>
		<br />
    
    	<a href="index" class="btn">Voltar á Home Page</a>
</div>



</body>
