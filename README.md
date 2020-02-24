# ORGMD - Curso Wordpress CMS

Resumo do Curso de Wordpress - Nivel JR.

## <a name="indice">Índice</a>

1. [Introdução](#parte1)     
2. [WP Básico](#parte2)     
3. [PHP para WP](#parte3)     
4. [HTML para WP](#parte4)     
5. [Projeto](#parte5)     
---


## <a name="parte1">1 - Introdução</a>

- WP como CMS
- Por que Wordpress
- Wordpress.org vs Wordpress.com

[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - WP Básico</a>

- Desenvolvimento Local
  - XAMPP Servidores Locais
- Instalação do Wordpress
  - Baixando do site e criando BD de dados
- Interface de administração do Wordpress
  - Detalhes do painel, adição de postagens, imagens e outras configurações
- Temas do wordpress
- Plugins do wordpress
- Configuração do Wordpress

[Voltar ao Índice](#indice)

---
M

## <a name="parte3">3 - PHP para WP</a>

- O que é PHP
- Editar Arquivos
- **Variáveis, Condicionamento e Loop**

- testephp-inicio/variaveis.php

```php
<html>
<head>
	<title>Variáveis</title>
</head>
<style>
	body {
		font-size: 1.5em;
	}
	div {
		margin: 0 auto;
		max-width: 500px;
	}
	.exemplo1 {
		color: #333;
	}
</style>
<body>

	<?php 
		$tituloSite = 'Bikcraft';
		$listaProdutos = array('Produto 1', 'Produto 2', 'Teste Produto 3');
	?>
	<div class="exemplo1">
		<h1><?php echo $tituloSite ?></h1>
		<h2>O <?php echo $tituloSite ?> é o melhor do Brasil</h2>
		<p>Quer aprender Web Design então se cadastre no site da <?php echo $tituloSite ?></p>
		<ul>
			<li><?php echo $listaProdutos[0]; ?></li>
			<li><?php echo $listaProdutos[1]; ?></li>
			<li><?php echo $listaProdutos[2]; ?></li>
		</ul>
	</div>

</body>
</html>
```

- testephp-inicio/loop.php

```php
<html>
<head>
	<title>Loop</title>
</head>
<style>
	body {
		font-size: 1.5em;
	}
	div {
		margin: 0 auto;
		max-width: 500px;
	}
	.exemplo1 {
		color: #333;
	}
</style>
<body>

	<div class="exemplo1">

		<h1>Total de Sites Vendidos</h1>
		<ul>
		<?php
			$total = 1;
			$maximo = 10;
			while ($total <= $maximo) :
		?>
			<li>Site <?php echo $total; ?></li>
		<?php 
			$total++;
			endwhile;
		?>
		</ul>

	</div>

</body>
</html>
```

- testephp-inicio/condicionamento.php

```php
<html>
<head>
	<title>Condicionamento</title>
</head>
<style>
	body {
		font-size: 1.5em;
	}
	div {
		margin: 0 auto;
		max-width: 500px;
	}
	.exemplo1 {
		color: #333;
	}
</style>
<body>

	<?php 
		$tituloSite = 'Site Origamid';
	?>
	<div class="exemplo1">
		<?php if ($tituloSite == 'Site Origamid') { ?>

			<h1><?php echo $tituloSite ?></h1>
			<p>Quer aprender Web Design então se cadastre no site da <?php echo $tituloSite ?></p>

		<?php } else { ?>

			<h1>Este não é o site da Origamid</h1>

		<?php } ?>
	</div>

	<?php $comprou = false ?>
	<div class="exemplo2">
		<?php if ($comprou == true) { ?>
			<p>Liberar acesso ao curso</p>
		<?php } else { ?>
			<p>Curso bloqueado.</p>
		<?php } ?>
	</div>

</body>
</html>
```

[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - HTML para WP</a>

- Novo tema Wordpress
  - projeto_wp01\wp-content\themes\rest
- Header e Footer
- Template de Página
- O Loop
- Advance custom Field
- Valores de Outras páginas
- SEO e Contato
- Functions e Menu

[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - Projeto </a>



[Voltar ao Índice](#indice)

---

