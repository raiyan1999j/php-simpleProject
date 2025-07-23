<?php
    $menus = [
        ["title"=>"catalogue","link"=>"#"],
        ["title"=>"fashion","link"=>"#"],
        ["title"=>"favourite","link"=>"#"],
        ["title"=>"lifestyle","link"=>"#"]
    ];

    $footerIcons = array("ri-facebook-line","ri-twitter-line","ri-instagram-line","ri-linkedin-line");

    $footerMenus = [
        [
            "title"=>"company",
            "menus"=>array("about","contact us","support","careers")
        ],
        [
            "title"=>"quick link",
            "menus"=>array("share location","orders tracking","size guide","faqs")
        ],
        [
            "title"=>"legal",
            "menus"=>array("terms & conditions","privacy policy")
        ]
    ];

    require "controller/home.php";
?>