<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- tailwind-css -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- google-fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- remix-icon -->
     <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
    <!-- style-css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <!-- navArea-start -->
     <nav class="fixed top-0 w-full h-[62px] xl:grid md:grid hidden grid-cols-3 items-center xl:px-[40px] 2xl:px-[99px] md:px-10 py-[48px]">
        <div class="flex flex-row items-center xl:gap-x-[15px] md:px-2">
            <div>
                <img src="../../assets/image/pageLogo.png" alt="pageLogo">
            </div>
            <div>
                <h4 class="poppins font-black text-black text-4xl uppercase">
                    fashion
                </h4>
            </div>
        </div>

        <div class="flex flex-row xl:gap-x-[65px] md:gap-x-8 col-span-2 justify-end">
            <?php foreach($menus as $items):?>
                <a href="<?= $items["link"]?>" class="poppins text-[#242323] font-medium xl:text-[22px] md:text-lg uppercase">
                    <?= $items["title"]?>
                </a>
            <?php endforeach;?>

            <div>
                <a href="#" class="bg-black rounded-lg py-[13px] xl:px-[22px] md:px-4 text-white poppins xl:text-2xl md:text-lg uppercase">
                    Sign up
                </a>
            </div>
        </div>
     </nav>
    <!-- navArea-finish -->

    <!-- responsiveNavArea-start -->
    <?php require "responsiveNav.view.php"?>
    <!-- responsiveNavArea-finish -->
