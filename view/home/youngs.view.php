<section class="mt-[190px] px-[100px]">
    <div class="mb-[118px]">
        <h2 class="poppins text-black font-black text-5xl uppercase relative after:absolute after:h-10 after:w-[190px] after:bg-[#EBD96B] after:rounded-tl-full after:rounded-br-full after:rounded-bl-xl after:left-[20%] after:top-[40%] after:-z-10">
            young's favourite
        </h2>
    </div>

    <div class="grid grid-cols-2 gap-x-12">
        <?php foreach($youngs as $items):?>
            <div class="space-y-7">
                <div class="w-full h-[575px]">
                    <img src="../../assets/image/<?= $items["img"]?>" alt="image">
                </div>

                <div class="flex flex-row items-center justify-between">
                    <div>
                        <h4 class="poppins font-medium text-[32px] text-black capitalize">
                            <?= $items["title"]?>
                        </h4>
                        <a href="#" class="poppins font-medium text-2xl text-[#7F7F7F] capitalize">
                            <?= $items["link"]?>
                        </a>
                    </div>

                    <div>
                        <button class="text-4xl text-[#7F7F7F]">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</section>