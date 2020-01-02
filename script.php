<?php
	
	/*
	*
	* As linhas 10 até 16 são as variáveis onde estou armanezando as informações
	* do formulário através do metódo POST. 
	* 
	* Para obter mais informações sobre variáveis estou colocando um link 
	* abaixo para estudo, direto do site oficial do PHP
	* https://www.php.net/manual/pt_BR/language.variables.basics.php
	*
	*/

	$assunto        = $_POST['assunto'];
	$corpo 			= "
		Assunto: 	".$_POST['assunto']."
		Nome: 		".$_POST['nome']." 
		Email: 		".$_POST['email']."
		Mensagem:	".$_POST['mensagem']."
	";

	/*
	* A Função é responsável por realizar o disparo dar informações por email.
	* essa função depende de alguns paramêtros como:
	* Destinatário: Para qual e-mail será enviado os dados.
	* Assunto: Seria o subject o assunto referente a informação a ser enviada.
	* Corpo: São os dados armazenados na variável.
	* Remetente: Onde será exibido qual email está sendo enviado.
	* 
	* Para mais definição sobre a função mail você pode ler o link abaixo
	* https://www.php.net/manual/pt_BR/function.mail.php
	*
	*/
	mail('destino@destino.com.br', $assunto, $corpo, 'From: remetente@meusite.com');
	
	/*
	*
	* Função echo responsável por imprimir uma string(texto) na tela o.
	* 
	* Veja com mais detalhes no link abaixo.
	* https://www.php.net/manual/pt_BR/function.echo.php
	*
	*/

	echo 'Seus dados foram enviados com sucesso!';
?>