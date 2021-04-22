# Aprendendo PHP 7
## Ferramentas necessárias

- PHP language
- Apache/Nginx(Servidores)
- Banco de Dados(MySQL, PostegreSQL)
- VSCODE

# PHP by Linux

- 1. Acessando Lampp:
    - cd /opt/lamp

- 2. Inicialização do Xampp
    - sudo ./manager-linux-x64.run

- 3. Modificando informações sobre a inicialização do PHP
    - htdocs or properties.ini

# Funcionamento do PHP

- 1. Apache recebe  a requisição
- 2. Manda para o local de origem
- 3. Chama o PHP para interpretar o código PHP
- 4. PHP manda o result para o Apache
- 5. o Apache manda o que não é interpretável para o usuário final

# Comandos PHP

- echo "": Informa um result para do PHP para Servidor Apache para User

# Tipos de Variáveis no PHP:

- Para cada variável é necessário um inicializador, no caso, $
- Variáveis não podem começar com caracteres especiais, nem números
- Interger: Número Inteiro, ex: 10
- Float: Número com ponto fluante, ex: 2.3
- String: Texto, ex: "Vicente" ou 'Vicente' existe diferença quando se mescla
- Boolean: True ou False
- Null: Variável vazio(obs*: Existe diferença entre "" e null)

# Mesclando Variavéis

- Para mescla variáveis, utilizamos algumas variante de concatenção
- ".": com o ponto conseguimos mescla strings
- Para que haja uma separação de strings, pode se usar uma concatenção tripla
- Pode usar aspas duplas para separação de strings
- Já com relação a números, utiliza-se expressões númericas
- +, -, *, /, % cada uma delas podem ser utilizadas para os números

```

    Exemplo de concatenção tripla:

        <?php
        $nome = 'Vicente';
        $sobrenome = 'Andrade';

        $nomeCompleto = $nome.' '.$sobrenome; // Separação por meio de aspas simples
        $nomeCompleto = $nome
        $nomeCompleto .= $sobrenome // Dessa forma é possível concatenar strings
        echo $nomeCompleto;

    Exemplo de concatenção com aspas duplas

        $nomeCompleto = "$nome $sobrenome";
        obs*: Caso você coloque aspas simples o valor a ser apresentado é um texto literal
              Caso você coloque aspas duplas o valor ainda é verificado para caso seja um variável
        

```

# Array em PHP

- Arrays servem para adicionar mais de uma informação dentro de uma variável
- Para construir um array, utiliza-se [] para adicionar informações dentro do cochetes
```
    Exemplo de Arrays:
    
        $ingreditentes = [
            'Açucar', 
            'Farinha de Trigo', 
            'Ovo', 
            'Leite', 
            'Fermento em Pó'
        ];

        $numerosDaMegaSena = [
            10, 
            14, 
            27, 
            34, 
            8, 
            9
        ];

echo "Número 1: ".$numerosDaMegaSena[2]."<br/>";
echo "Número 2: ".$numerosDaMegaSena[3];

```

# Operador Array Spread(v7.4~)

- O Operador array spread serve para duplicar informações de um array para outra

```
    Exemplo de Array Spread
        <?php
        // Ingredientes de um Bolo
        // Utilizando Arrays

        $bolo1 = [
            'Açucar', 
            'Farinha de Trigo', 
            'Ovo', 
            'Leite', 
            'Fermento em Pó'
        ];

        $bolo2 = [
            'Vasilha',
            'Água Morna',
            ...$bolo1,
            'corante'
        ];

        print_r($bolo2);

    - Resultado: Variável bolo2 agora possui os mesmo elemento da array do bolo1
    obs*: necessário o uso dos 3 ponto(...)

```

# Condicional IF - Ternário - NULL CAO(v7.4~) - Switch

- Condicionais servem para informar resultado baseado em uma sequência de condições

```

    1. Condicional 
    
        $idade = 12;

        if($idade < 18) {
            echo "Menor de Idade";
        } else {
            echo "Maior de Idade";
        }
        
        - >, <, ==, >=, <=, !=, === Condicionais dentro do IF
        obs*: É possível adicionar else if para que aja um aumento dentro das condicionais aprensentadas

    2. Operador Ternário

        - (CONDICIONAL ? RESULTADO POSITIVO : RESULTADO NEGATIVO)

        echo (idade < 18) ? 'Menor de idade' : 'Maior de idade';
    
    3. NULL CAO

        <?php
        

        $nome = 'Vicente';


        $nomeCompleto = $nome;
        $nomeCompleto .= isset($sobrenome) ? $sobrenome : null;

        echo $nomeCompleto; 

        - Através dessa condição é possível adicionar uma variável mesmo que esta não tenha sido criada
        - Porém existem uma forma simplificada para esta condição

        $nomeCompleto .= $sobrenome ?? ''; -> Forma Simplificada, chamada NULL CAO

    4. Switch

    <?php

        $tipo = 'foto';

        switch($tipo) {
            case 'foto':
                echo 'Exibindo FOTO';
                break;
            case 'video':
                echo 'Exibindo VÍDEO';
                break;
            case 'texto':
                echo 'Exibindo TEXTO';
                break;
        }

```

