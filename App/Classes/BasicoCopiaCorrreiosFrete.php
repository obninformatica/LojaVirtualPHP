<?php
    $dados = [
        'tipo'              => 'sedex', // Separar opções por vírgula (,) caso queira consultar mais de um (1) serviço. > Opções: `sedex`, `sedex_a_cobrar`, `sedex_10`, `sedex_hoje`, `pac`, 'pac_contrato', 'sedex_contrato' , 'esedex'
        'formato'           => 'caixa', // opções: `caixa`, `rolo`, `envelope`
        'cep_destino'       => '89062086', // Obrigatório
        'cep_origem'        => '89062080', // Obrigatorio
        //'empresa'         => '', // Código da empresa junto aos correios, não obrigatório.
        //'senha'           => '', // Senha da empresa junto aos correios, não obrigatório.
        'peso'              => '1', // Peso em kilos
        'comprimento'       => '16', // Em centímetros
        'altura'            => '11', // Em centímetros
        'largura'           => '11', // Em centímetros
        'diametro'          => '0', // Em centímetros, no caso de rolo
        // 'mao_propria'       => '1', // Náo obrigatórios
        // 'valor_declarado'   => '1', // Náo obrigatórios
        // 'aviso_recebimento' => '1', // Náo obrigatórios
    ];

    echo Correios::frete($dados);
    
    /*
        Retorno para uma única consulta:
        Array
        (
            [codigo] => 40010
            [valor] => 14.9
            [prazo] => 1
            [mao_propria] => 0
            [aviso_recebimento] => 0
            [valor_declarado] => 0
            [entrega_domiciliar] => 1
            [entrega_sabado] => 1
            [erro] => Array
                (
                    [codigo] => 0
                    [mensagem] => 
                )
        )
    */

    /*
        Retorno para várias consultas:
        Array
        (
            0 => Array
            (
                [codigo] => 4510
                [valor] => 14.9
                [prazo] => 1
                [mao_propria] => 0
                [aviso_recebimento] => 0
                [valor_declarado] => 0
                [entrega_domiciliar] => 1
                [entrega_sabado] => 1
                [erro] => Array
                    (
                        [codigo] => 0
                        [mensagem] => 
                    )
            ),
            1 => Array
            (
                [codigo] => 4014
                [valor] => 14.9
                [prazo] => 1
                [mao_propria] => 0
                [aviso_recebimento] => 0
                [valor_declarado] => 0
                [entrega_domiciliar] => 1
                [entrega_sabado] => 1
                [erro] => Array
                    (
                        [codigo] => 0
                        [mensagem] => 
                    )
            )
        )
    */