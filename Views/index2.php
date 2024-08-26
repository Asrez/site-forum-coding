<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title['value_setting'] ?></title>
    <?php include "init/style.php"; ?>
</head>
<body class="bg-[--color1] pb-0 sm:pb-10">

<?php include "includes/header.php"; ?>

<div class="container mx-auto xl:px-14 p-4">
    <main class="w-full flex gap-10">
        <aside class="2xl:basis-[15%] lg:basis-[18.5%] lg:block hidden relative">
            <div class="sticky top-8">
                <button class="bg_gr h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative newDescription">
                    New Discussion
                </button>
            </div>
        </aside>
        <div class="2xl:basis-[66.5%] lg:basis-[81.5%] basis-full">
            <header class="flex md:flex-row md:justify-between flex-col items-start md:items-center md:gap-0 gap-4">
                <div class="select-wrapper flex gap-3">
                </div>
                <div class="flex items-center sm:w-auto w-full gap-0 sm:gap-3">
                    <div class="hidden sm:flex flex-row-reverse gap-2">
                        <a href="main" class="sort1 rounded-lg w-[32px] hidden sm:flex justify-center items-center h-[32px] hover:bg-[--color3] bg-[--color2]">
                            <svg class="mx-2" height="15" viewBox="0 0 15 15" width="15">
                                <g class="fill-white" fill-rule="evenodd">
                                    <rect class="forum-excerpt-toggle-line" height="4" rx="2" width="15"></rect>
                                    <rect class="forum-excerpt-toggle-line" height="4" rx="2" width="8" y="11"></rect>
                                    <rect class="forum-excerpt-toggle-line" height="4" rx="2" width="15" y="5.5"></rect>
                                </g>
                            </svg>
                        </a>
                        <a href="main2" class="sort2 rounded-lg w-[32px] hidden sm:flex justify-center items-center h-[32px] hover:bg-[--color3] bg-[--color2] active">
                            <svg class="mx-2" height="15" viewBox="0 0 15 15" width="15">
                                <g class="fill-white" fill-rule="evenodd">
                                    <rect class="forum-excerpt-toggle-line" height="6" rx="2" width="15"></rect>
                                    <rect class="forum-excerpt-toggle-line" height="6" rx="2" width="15" y="9"></rect>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <form action="/search" class="search-form flex md:w-auto w-full" method="get">
                        <label class="flex h-[40px] bg-[--color8] rounded-[14px] px-4 md:w-auto w-full" for="search">
                            <svg class="text-[--color4]" viewBox="0 0 15 15" width="16">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="M-2-2h20v20H-2z"></path>
                                    <path class="fill-current"
                                          d="M10.443 9.232h-.638l-.226-.218A5.223 5.223 0 0 0 10.846 5.6 5.247 5.247 0 1 0 5.6 10.846c1.3 0 2.494-.476 3.414-1.267l.218.226v.638l4.036 4.028 1.203-1.203-4.028-4.036zm-4.843 0A3.627 3.627 0 0 1 1.967 5.6 3.627 3.627 0 0 1 5.6 1.967 3.627 3.627 0 0 1 9.232 5.6 3.627 3.627 0 0 1 5.6 9.232z"></path>
                                </g>
                            </svg>
                            <input class="bg-transparent md:w-auto w-full outline-0 ml-3 text-[--color4] tracking-wide"
                                   id="search"
                                   name="q"
                                   placeholder="Search..."
                                   type="search">
                        </label>
                    </form>
                </div>
            </header>
            <?php foreach ($questions as $question) { ?>
            <div class="conversation-list md:mt-8 mt-4 flex flex-col gap-3">
                <a class="conversation inline-block hover:bg-[--color2] transition-all duration-300 bg-[--color8] rounded-[14px] py-4 px-7 w-full"
                   href="show_post/<?= $question['id'] ?>">
                    <figure class="inline-flex justify-center float-start items-start w-[52px]">
                        <img alt="" class="rounded-[14px]" loading="lazy" src="./static/photos/<?= $question['image'] ?>">
                    </figure>
                    <div class="content w-[calc(100%-80px)] float-end h-full inline-flex flex-col  align-top">
                        <div class="float-start flex flex-col sm:flex-row gap-2 sm:gap-0 sm:justify-between sm:items-center w-full">
                            <h4 class="tracking-normal font-bold text-white text-[20px] line-clamp-1"><?= $question['title'] ?></h4>
                            <div class="flex gap-3">
                                <div class="flex items-center justify-center">
                                    <svg class="text-card-200" height="13" viewBox="0 0 19 13" width="19">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M0-3h19v19H0z"></path>
                                            <path d="M9.5.562C5.542.562 2.161 3.025.792 6.5c1.37 3.475 4.75 5.937 8.708 5.937s7.339-2.462 8.708-5.937C16.838 3.025 13.458.562 9.5.562zm0 9.896A3.96 3.96 0 0 1 5.542 6.5 3.96 3.96 0 0 1 9.5 2.542 3.96 3.96 0 0 1 13.458 6.5 3.96 3.96 0 0 1 9.5 10.458zm0-6.333A2.372 2.372 0 0 0 7.125 6.5 2.372 2.372 0 0 0 9.5 8.875 2.372 2.372 0 0 0 11.875 6.5 2.372 2.372 0 0 0 9.5 4.125z"
                                                  fill="#8EA5C2"></path>
                                        </g>
                                    </svg>
                                    <span class="text-left text-xs leading-none text-[--color9] font-bold ml-1"><?= $question['viewcount'] ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="conversation-information w-full mt-4 flex flex-col items-start gap-1 sm:flex-row-reverse font-bold text-[13px] sm:justify-between">
                            <p class="font-bold text-[--color9] text-[12px]"><?= $question['date'] ?></p>
                        </div>
                    </div>
                </a>

            </div>
            <?php } ?>
        </div>

        <?php include "includes/advertising.php"; ?>
        
    </main>
</div>

<?php include "includes/footer.php"; ?>

<?php include "includes/modals.php"; ?>

<?php include "init/script.php"; ?>
</body>
</html>