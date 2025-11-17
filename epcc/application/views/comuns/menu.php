<ul class="nav menu-nav">
	<!--
		this->router->fetch_class() -> é responsável por verificar se uma classe existe e CI
		this->router->fetch_method() -> é responsável por verificar se existe um método na classe CI

		Sem configurar o base_url-> por padrão devolve o valor vazio ou default do servidor [::1]
		Devem defenir .../config/config.php:
		$config['base_url'] = 'http://localhost/codeigniter/epcc/';
	-->
	<li class="<?=($this->router->fetch_class() == 'Raiz' && 
	this->router->fetch_method() == 'index') ? 'active' : null
?>">
	<a href="<?=base_url()?>"></a>
	</li>

</ul>