<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);


define('CLASS_DIR', '../src');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();


		$cliente = new Education\Cliente\ClientePessoaFisica(1, "alexandre", "bispo", "983415878", "rua Adelaide", "apt406", "20751060", "88776655355");
		$cliente->setStar("5 Estrelas");
		$cliente->setEnderecoCobranca('Rua Teofilo');
		$cliente->setComplementoCobranca('4006');
		$cliente->setCepCobranca('98767654');

		$cliente2 = new Education\Cliente\ClientePessoaFisica(2, "Amanda", "Bispo", "968765456", "Rua Alvares da Rocha", "bl 33 - apt106", "20751180", "998877665");
        $cliente2->setStar('4 Estrelas');
        $cliente2->setEnderecoCobranca('Rua Adelaide');
        $cliente2->setComplementoCobranca('ap 406');
        $cliente2->setCepCobranca('20751060');

        $cliente3 = new education\Cliente\ClientePessoaFisica(3, "Edison", "Bispo", "988776654", "Rua Itaiba", "Casa 10", "20751300", "998877678");
        $cliente3->setStar('3 Estrelas');
        $cliente3->setEnderecoCobranca('Rua logo ali');
        $cliente3->setCepCobranca('20000001');

        $cliente4 = new Education\Cliente\ClientePessoaFisica(4, "Leandro", "Costa", "998767876", "Rua Alvares da Rocha", "lote 2, casa 6", "30509777", "03355644387");
       	$cliente4->setStar('2 Estrelas');
        $cliente4->setEnderecoCobranca('Rua Alvares da Rocha');
        $cliente4->setComplementoCobranca('ap 106');
        $cliente4->setCepCobranca('20751310');

        $cliente5 = new Education\Cliente\ClientePessoaFisica(5, "Rafael", "Louco", "987766556", "Rua Nao sei aonde", "--", "40985345", "02198438974");
        $cliente5->setStar('1 Estrela');
        $cliente5->setEnderecoCobranca('Rua logo ali');
        $cliente5->setCepCobranca('20000001');

        $cliente6 = new Education\Cliente\ClientePessoaFisica(6, "Yuri", "Rangel", "996556476", "Rua 6", "--", "20751280", "98778965478");
        $cliente6->setStar('5 Estrelas');

        $cliente7 = new Education\Cliente\ClientePessoaFisica(7, "Wilson", "Ares", "77876578", "Rua Itarare", "Proximo ao Colegio Tim Lopes", "20755432", "04587667895");
        $cliente7->setStar('4 Estrelas');

        $cliente8 = new Education\Cliente\ClientePessoaFisica(8, "Victor", "Brito", "979765567", "Rua 7", "--", "20751250", "50508097");
        $cliente8->setStar('3 Estrelas');

        $cliente9 = new Education\Cliente\ClientePessoaFisica(9, "Alfredo", "Dino", "998776980", "Rua dos Bobos", "n. 0", "40598666", "01098765478");
        $cliente9->setStar('2 Estrelas');
        
        $cliente10 = new Education\Cliente\ClientePessoaFisica(10, "Alberto", "Roberto", "964788765", "Rua me perdi", "n. 1", "8879879", "41032020010");
        $cliente10->setStar('1 Estrela');

	//Empresas
    $cliente11 = new Education\Cliente\ClientePessoaJuridica(11, "Cuca", "Design", "25124948", "Rua Marques de São Vicente", "Sobreloja", "9988776655", "10000000000");
    $cliente11->setStar('5 Estrelas');

    $cliente12 = new Education\Cliente\ClientePessoaJuridica(12, "Canal dos Concursos", "Cursos Preparatórios LTDA", "25124948", "Rua México, 45", "5º andar", "2217-5600", "08243821000160");
    $cliente12->setStar('3 Estrelas');

    $cliente13 = new Education\Cliente\ClientePessoaJuridica(13, "Degrau", "Cultural", "25329734", "Praça Mahatma Gandhi, 2", "sls 201 a 204", "20031100", "10000000000");
    $cliente13->setStar('3 Estrelas');

    $cliente14 = new Education\Cliente\ClientePessoaJuridica(14, "Curso Renato Saraiva", "", "--", "Rua Madre de Deus, 27", "Andar 10 ", "50030906", "08403264000106");
    $cliente14->setStar('3 Estrelas');

    $cliente15 = new Education\Cliente\ClientePessoaJuridica(15, "A Casa", " do Concurseiro", "980600066", "Rua Jerônimo Coelho, 307", "Andar 10 ", "90010240", "não informado");
    $cliente15->setStar('3 Estrelas');



	//Cadastrando Cliente
    $Clientes = new Education\Persist\Cliente();
    	$Clientes->Persist($cliente);
    	echo "<br /><br /> ################ Objeto Cliente Preparado ##################### <br /><br />";
      $Clientes->Persist($cliente2);
   		echo "<br /><br /> ################ Objeto cliente2 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente3);
   		echo "<br /><br /> ################ Objeto cliente3 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente4);
   		echo "<br /><br /> ################ Objeto cliente4 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente5);
   		echo "<br /><br /> ################ Objeto cliente5 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente6);
   		echo "<br /><br /> ################ Objeto cliente6 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente7);
   		echo "<br /><br /> ################ Objeto cliente7 Preparado #####################<br /><br />";
   		$Clientes->Persist($cliente8);
   		echo "<br /><br /> ################ Objeto cliente8 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente9);
   		echo "<br /><br /> ################ Objeto cliente9 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente10);
   		echo "<br /><br /> ################ Objeto cliente10 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente11);
   		echo "<br /><br /> ################ Objeto cliente11 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente12);
   		echo "<br /><br /> ################ Objeto cliente12 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente13);
   		echo "<br /><br /> ################ Objeto cliente13 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente14);
   		echo "<br /><br /> ################ Objeto cliente14 Preparado ##################### <br /><br />";
   		$Clientes->Persist($cliente15);
      echo "<br /><br /> ################ Objeto cliente15 Preparado ##################### <br /><br />";
  
  $Clientes->flush();
  echo "<br /><br /> ################ gravado no database ##################### <br /><br />";
  
 ?>