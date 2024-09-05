<header class="top-header mb-0 sm:mb-8 h-[73px] w-full border-b-[0.001rem] border-white/5 flex justify-between items-center px-3 sm:px-[30px] relative before:content-[''] before:w-full before:h-[19px] before:m-0 before:z-[-1] before:p-0 before:block before:absolute before:top-[38%] before:left-0 before:opacity-25">
    <div class="xl:flex-1 basis-[40px] flex justify-start">
        <a href="<?= $logo['link'] ?>"><img alt="" class="w-[40px]" src="../static/<?= $logo['value_setting'] ?>"></a>
    </div>
    <div class="flex-1 hidden md:flex xl:justify-center xl:ms-0 ms-10 justify-start h-full items-center">
        <a class="font-bold tracking-[0.05rem] text-[--color6] hover:text-white transition-all duration-300 relative h-full items-center flex justify-center before:w-full before:h-[4px] before:bg-[--color5] before:content-[''] before:inline-block before:absolute before:bottom-0 before:start-0 before:rounded-[5px] before:transition-all before:duration-300 before:opacity-0 hover:before:opacity-100 active"
           href="<?= $title['link'] ?>"><?= $title['value_setting'] ?></a>
    </div>
    <div class="btn-wrapper flex-1 flex justify-end gap-3">
        <button class="h-[40px] w-[40px] rounded-[14px] flex justify-center items-center bg-[--color2] text-white hover:bg-[--color3] transition-all duration-300 text-[--color4]"
                id="search_btn">
            <svg viewBox="0 0 15 15" width="17">
                <g fill="none" fill-rule="evenodd">
                    <path d="M-2-2h20v20H-2z"></path>
                    <path class="fill-current text-[--color4]"
                          d="M10.443 9.232h-.638l-.226-.218A5.223 5.223 0 0 0 10.846 5.6 5.247 5.247 0 1 0 5.6 10.846c1.3 0 2.494-.476 3.414-1.267l.218.226v.638l4.036 4.028 1.203-1.203-4.028-4.036zm-4.843 0A3.627 3.627 0 0 1 1.967 5.6 3.627 3.627 0 0 1 5.6 1.967 3.627 3.627 0 0 1 9.232 5.6 3.627 3.627 0 0 1 5.6 9.232z"></path>
                </g>
            </svg>
        </button>
        <?php if (isset($_SESSION['admin_id'])) { ?>
        <a id="logout_main" class="h-[40px] w-[77px] rounded-[14px] hidden md:flex justify-center items-center bg-[--color2] font-bold tracking-wide hover:bg-[--color3] transition-all duration-300 text-[--color4] text-[14px]">
            Log Out
        </a>
        <a href="/manage/profile" class="bg_gr h-[40px] w-[163px] rounded-[14px] hidden md:flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative">
            Profile
        </a>
        <?php } else { ?>
        <button class="h-[40px] w-[77px] rounded-[14px] hidden md:flex justify-center items-center bg-[--color2] font-bold tracking-wide hover:bg-[--color3] transition-all duration-300 text-[--color4] text-[14px]"
                id="signIn_btn" >
            Log In
        </button>
        <button class="bg_gr h-[40px] w-[163px] rounded-[14px] hidden md:flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative"
                id="signUp_btn">
            Get Started
        </button>
        <?php } ?>
        <button class="h-[40px] w-[40px] md:hidden rounded-[14px] flex flex-col justify-center gap-1 items-end bg-[--color2] text-white hover:bg-[--color3] transition-all duration-300 text-[--color4] pe-2"
                id="hamburger_btn">
            <span class="w-[24px] h-[3px] rounded-full bg-white"></span>
            <span class="w-[19px] h-[3px] rounded-full bg-white"></span>
            <span class="w-[14px] h-[3px] rounded-full bg-white"></span>
        </button>
    </div>
</header>