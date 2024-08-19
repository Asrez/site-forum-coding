<aside class="basis-[18.5%] hidden 2xl:block">
    <div class="sticky top-8">
        <?php foreach ($advers as $adver) { ?>
            <a class="w-full rounded-[14px] mt-4 bg-[--color7] transition-all duration-300 hover:bg-[--color8] overflow-hidden relative p-3 flex flex-col items-center justify-start gap-3"
                href="<?= $adver['link'] ?>">
                <h6 class="line-clamp-1 font-bold tracking-[0.05rem] text-white text-center w-[210px]">
                <?= $adver['title'] ?>
                </h6>
                <figure class="flex justify-center items-center">
                    <img alt="adver_img" class="h-[85px]"
                            src="./images/sidebar/<?= $adver['value_setting'] ?>">
                </figure>
                <p class="line-clamp-3 tracking-[0.05rem] text-center w-[210px] text-[14px] text-white">
                    <?= $adver['content'] ?>
                </p>
            </a>
        <?php } ?>
    </div>
</aside>