<section class="mt-[100px] px-[219px]">
    <div class="grid grid-cols-2 advertiseBg bg-no-repeat">
        <div class="my-[250px]">
            <div class="xl:w-[507px] mb-10">
                <h2 class="poppins text-black font-black text-5xl tracking-wider leading-[150%] uppercase">
                DOWNLOAD APP & GET THE VOUCHER!
                </h2>
            </div>

            <div class="xl:w-[507px] mb-[65px]">
                <p class="poppins font-medium text-2xl text-[#7C7C7C]">
                    Get 30% off for first transaction using Rondovision mobile app for now.
                </p>
            </div>

            <div class="flex flex-row gap-x-[19px]">
                <?php foreach($app as $items):?>
                    <div>
                        <img src="../../assets/image/<?= $items?>" alt="appImage">
                    </div>
                <?php endforeach;?>
            </div>
        </div>

        <div class="flex justify-center items-center">
            
        </div>
    </div>
</section>