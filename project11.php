<?php
$datas = [
    ["nis" => 12209087,
    "name" => "Lastriantini",
    "rayon" => "16",
    "major" => "PPLG",

    ],
    ["nis" => 122090358,
    "name" => "Rainy Nur Baeti",
    "rayon" => "16",
    "major" => "PPLG",
    ]
];
function biodata($data){
    $nama = htmlspecialchars($data["name"]);
    $nis = htmlspecialchars($data["nis"]);
    $rombel = htmlspecialchars($data["rombel"]);
    $rayon = htmlspecialchars($data["rayon"]);

}