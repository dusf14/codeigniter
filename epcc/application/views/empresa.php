<?php $this->load->view('comuns/header', $data); ?>
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
        padding: 30px 20px;
        background: #fff;
        margin-top: 40px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    h1 {
        margin-top: 0;
    }

    .intro-box {
        margin-top: 18px;
        padding: 16px;
        background: #eef3ff;
        border-left: 4px solid #4a6bff;
        border-radius: 6px;
        color: #333;
        font-size: 15px;
    }

    .btns {
        margin-top: 24px;
        display: flex;
        gap: 12px;
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

    .btn:hover {
        background: #3452e6;
    }
</style>

<div id="container">
	<h1><?= $heading; ?></h1>
    <nav>
        <? $this->load->view('comuns/menu'); ?>
    </nav>

    <div class="intro-box">
        Bem vindo ao meu grande site! Realizado em codeigniter 3.
    </div>

    <div class="btns">
        <a href="servicos" class="btn">Serviços</a>
        <a href="contactos" class="btn">Contactos</a>
        <a href="gallery" class="btn">Gallery</a>
    </div>

    <div>
        A minha empresa é a maior de Portugal, transportes Duarte Cardoso, a sua encomenda já vai a caminho... 
    </div>
</div>

</body>
<?php $this->load->view('comuns/footer', $data); ?>