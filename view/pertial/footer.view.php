<!-- footerArea-start -->
 <footer class="bg-black text-white py-[119px] 2xl:px-[100px] xl:px-[50px] px-10">
    <div class="grid 2xl:grid-cols-5 grid-cols-1 gap-y-10">
        <div class="xl:col-span-2">
            <div>
                <h2 class="poppins font-black text-[40px] uppercase">
                    fashion
                </h2>
            </div>

            <div class="xl:w-[415px] w-full my-8">
                <p class="roboto capitalize text-[#8E8E8E] font-normal text-2xl leading-10">
                    complete your style with awesome clothes from us
                </p>
            </div>

            <div class="flex flex-row gap-x-[14px]">
                <?php foreach($footerIcons as $items):?>
                    <span class="h-[52px] w-[52px] rounded-xl bg-[#EBD96B] flex justify-center items-center">
                        <i class="<?= $items?> text-black text-xl"></i>
                    </span>
                <?php endforeach;?>
            </div>
        </div>

        <div class="xl:col-span-3 flex xl:flex-row flex-col justify-center items-center gap-x-[190px] gap-y-10">
            <?php foreach($footerMenus as $items):?>
                <div>
                    <h4 class="roboto text-[#D9D9D9] font-normal text-2xl capitalize xl:text-left text-center">
                        <?= $items["title"]?>
                    </h4>
                    <div class="flex flex-col gap-y-8 mt-8">
                        <?php foreach($items["menus"] as $subMenus): ?>
                            <a href="#" class="roboto text-[#8E8E8E] font-normal text-2xl capitalize">
                                <?= $subMenus?>
                            </a>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
 </footer>
<!-- footerArea-finish -->
</body>
</html>