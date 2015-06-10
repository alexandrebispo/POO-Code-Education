<?php
/**
 * Created by PhpStorm.
 * User: 3
 * Date: 5/27/15
 * Time: 12:23 PM
 */

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

    //Clientes
        $cliente[1]  = new Education\Cliente\ClientePessoaFisica(1, "alexandre", "bispo", "983415878", "rua Adelaide", "apt406", "20751060", "88776655355");
        $cliente[1]->setStar('5 Estrelas');
        $cliente[1]->setEnderecoCobranca('Rua Teofilo');
        $cliente[1]->setComplementoCobranca('4006');
        $cliente[1]->setCepCobranca('98767654');

        $cliente[2]  = new Education\Cliente\ClientePessoaFisica(2, "Amanda", "Bispo", "968765456", "Rua Alvares da Rocha", "bl 33 - apt106", "20751180", "998877665");
        $cliente[2]->setStar('4 Estrelas');
        $cliente[2]->setEnderecoCobranca('Rua Adelaide');
        $cliente[2]->setComplementoCobranca('ap 406');
        $cliente[2]->setCepCobranca('20751060');

        $cliente[3]  = new education\Cliente\ClientePessoaFisica(3, "Edison", "Bispo", "988776654", "Rua Itaiba", "Casa 10", "20751300", "998877678");
        $cliente[3]->setStar('3 Estrelas');
        $cliente[3]->setEnderecoCobranca('Rua logo ali');
        $cliente[3]->setCepCobranca('20000001');

        $cliente[4]  = new Education\Cliente\ClientePessoaFisica(4, "Leandro", "Costa", "998767876", "Rua Alvares da Rocha", "lote 2, casa 6", "30509777", "03355644387");
        $cliente[4]->setStar('2 Estrelas');
        $cliente[4]->setEnderecoCobranca('Rua Alvares da Rocha');
        $cliente[4]->setComplementoCobranca('ap 106');
        $cliente[4]->setCepCobranca('20751310');

        $cliente[5]  = new Education\Cliente\ClientePessoaFisica(5, "Rafael", "Louco", "987766556", "Rua Nao sei aonde", "--", "40985345", "02198438974");
        $cliente[5]->setStar('1 Estrela');
        $cliente[5]->setEnderecoCobranca('Rua logo ali');
        $cliente[5]->setCepCobranca('20000001');

        $cliente[6]  = new Education\Cliente\ClientePessoaFisica(6, "Yuri", "Rangel", "996556476", "Rua 6", "--", "20751280", "98778965478");
        $cliente[6]->setStar('5 Estrelas');

        $cliente[7]  = new Education\Cliente\ClientePessoaFisica(7, "Wilson", "Ares", "77876578", "Rua Itarare", "Proximo ao Colegio Tim Lopes", "20755432", "04587667895");
        $cliente[7]->setStar('4 Estrelas');

        $cliente[8]  = new Education\Cliente\ClientePessoaFisica(8, "Victor", "Brito", "979765567", "Rua 7", "--", "20751250", "50508097");
        $cliente[8]->setStar('3 Estrelas');

        $cliente[9]  = new Education\Cliente\ClientePessoaFisica(9, "Alfredo", "Dino", "998776980", "Rua dos Bobos", "n. 0", "40598666", "01098765478");
        $cliente[9]->setStar('2 Estrelas');
        
        $cliente[10]  = new Education\Cliente\ClientePessoaFisica(10, "Alberto", "Roberto", "964788765", "Rua me perdi", "n. 1", "8879879", "41032020010");
        $cliente[10]->setStar('1 Estrela');

    //Empresas
    $cliente[11] = new Education\Cliente\ClientePessoaJuridica(11, "Cuca", "Design", "25124948", "Rua Marques de São Vicente", "Sobreloja", "9988776655", "10000000000");
    $cliente[11]->setStar('5 Estrelas');

    $cliente[12] = new Education\Cliente\ClientePessoaJuridica(12, "Canal dos Concursos", "Cursos Preparatórios LTDA", "25124948", "Rua México, 45", "5º andar", "2217-5600", "08243821000160");
    $cliente[12]->setStar('3 Estrelas');

    $cliente[13] = new Education\Cliente\ClientePessoaJuridica(13, "Degrau", "Cultural", "25329734", "Praça Mahatma Gandhi, 2", "sls 201 a 204", "20031100", "10000000000");
    $cliente[13]->setStar('3 Estrelas');

    $cliente[14] = new Education\Cliente\ClientePessoaJuridica(14, "Curso Renato Saraiva", "", "--", "Rua Madre de Deus, 27", "Andar 10 ", "50030906", "08403264000106");
    $cliente[14]->setStar('3 Estrelas');

    $cliente[15] = new Education\Cliente\ClientePessoaJuridica(15, "A Casa", " do Concurseiro", "980600066", "Rua Jerônimo Coelho, 307", "Andar 10 ", "90010240", "não informado");
    $cliente[15]->setStar('3 Estrelas');
