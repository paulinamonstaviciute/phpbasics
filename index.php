<?php

$baulingas = [
    'takelis_pirmas' => [
        ['takelio_pradžia' => 'švarus'],
        ['takelio_vidurys' => 'juosta'],
        ['takelio_pabaiga' => [
                'kegliu_trikamis' => [
                    [0],
                    [1, 0],
                    [1, 0, 0],
                    [1, 0, 0, 1],
                ],
            ],
        ],],
    'takelis_antras' => [
        ['takelio_pradžia' => 'nešvarus'],
        ['takelio_vidurys' => 'juosta'],
        ['takelio_pabaiga' => [
                'kegliu_trikamis' => [
                    [0],
                    [0, 0],
                    [0, 0, 0],
                    [0, 0, 0, 0],
                ],],],],];
var_dump($baulingas);
