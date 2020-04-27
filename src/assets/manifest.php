<?php
$manifest = [
    "name" => "Régis André",
    "short_name" => "Régis A.",
    "description" => "Resume website of Régis André",
    "scope" => "/",
    "start_url" => "/",
    "display" => "standalone",
    "orientation" => "portrait-primary",
    "theme_color" => "#007fab",
    "background_color" => "#007fab",
    "prefer_related_applications" => false,

    "icons" => array([
        "src" => "/assets/img/favicon/favicon-512x512.png",
        "type" => "image/png",
        "sizes"=> "512x512"
        ], [
        "src" => "/assets/img/favicon/favicon-192x192.png",
        "type" => "image/png",
        "sizes"=> "192x192"
        ]
    )
];

header('Content-Type: application/json');
echo json_encode($manifest);