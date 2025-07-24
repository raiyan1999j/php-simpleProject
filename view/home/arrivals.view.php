<section class="px-[104px] mt-[69px]">
    <div class="mb-20">
        <h2 class="poppins text-black font-black text-5xl uppercase relative after:absolute after:h-10 after:w-[190px] after:bg-[#EBD96B] after:rounded-tl-full after:rounded-br-full after:rounded-bl-xl after:left-[12%] after:top-[40%] after:-z-10">
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