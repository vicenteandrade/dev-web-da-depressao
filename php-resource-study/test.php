<?php
$list = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 920
];

echo "Nome: ".$list['nome']."<br/>";
echo "Força: ".$list['atributos']['forca']."<br/>";