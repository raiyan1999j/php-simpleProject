<section class="px-[104px] mt-[69px]">
    <div class="mb-20">
        <h2 class="poppins text-black font-black text-[48px] uppercase">
            new arrivals
        </h2>
    </div>

    <div class="grid grid-cols-3 gap-x-[90px]">
        <?php foreach($arrivals as $items):?>
            <div>
                <div class="h-[704px]">
                    <img src="../../assets/image/<?= $items["img"]?>" alt="arrivalsImg" class="h-full w-full">
                </div>

                <div class="flex flex-row justify-between items-center mt-7">
                    <div>
                        <h4 class="poppins font-medium text-[32px] capitalize text-[#191919]">
                            <?= $items["title"]?>
                        </h4>
                        <a href="#" class="poppins font-medium text-2xl text-[#7F7F7F] capitalize leading-10">
                            <?= $items["link"]?>
                        </a>
                    </div>

                    <div>
                        <a href="#" class="text-4xl text-[#7F7F7F]">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>