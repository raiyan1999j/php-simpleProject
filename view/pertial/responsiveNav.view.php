<nav class="flex flex-row px-2 justify-between items-center xl:hidden md:hidden">
    <div class="flex flex-row items-center">
        <div>
            <img src="../../assets/image/pageLogo.png" alt="pageLogo">
        </div>

        <h4 class="poppins font-black text-black text-4xl uppercase">
                    fashion
        </h4>
    </div>

    <div>
        <button class="text-2xl" onclick="menuBtn()">
            <i class="ri-menu-line" id="menuIcon"></i>
        </button>
    </div>
</nav>

<!-- menusArea-start -->
 <div class="fixed top-0 left-[-100%] h-screen w-[80%] shadow-lg shadow-black/50 bg-white px-5 py-5 overflow-hidden transiton-all duration-200 ease-linear" id="menuArea">
    <div class="flex flex-col gap-y-10">
        <?php foreach($menus as $items):?>
            <div>
                <a href="<?= $items["link"]?>" class="poppins text-[#242323] font-medium text-[22px] uppercase">
                    <?= $items["title"]?>
                </a>
            </div>
        <?php endforeach;?>

        <div>
                <a href="#" class="bg-black rounded-lg py-[13px] px-[22px] text-white poppins text-2xl uppercase">
                    Sign up
                </a>
            </div>
    </div>
 </div>
<!-- menusArea-finish -->

<!-- script-file -->
<script src="../../assets/js/responsiveNav.js"></script>
