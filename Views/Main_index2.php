<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learn Laravel | Laracasts</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="./images/favicon-32x32.webp" rel="shortcut icon" type="image/x-icon">
    <link href="./node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <style>
        .bg-custom-gradient {
            background-image: radial-gradient(circle at 0% 2%, rgb(0, 117, 255), rgb(31, 64, 106) 100%);
        }

        .swal2-show {
            border-radius: 30px !important;
            border: 3px solid var(--color2);
        }

        .swal2-icon {
            margin-top: 20px;
        }

        .swal2-container .swal2-title {
            padding-top: 10px !important;
        }

        .swal2-container .swal2-popup {
            background-color: var(--color1) !important;
        }

        .swal2-container .swal2-title,
        .swal2-container .swal2-html-container {
            color: white !important;
        }

        .swal2-container .swal2-styled {
            color: white !important;
            border-radius: 14px;
            width: 100px;
            background-color: var(--color5) !important;
        }

        div:where(.swal2-icon).swal2-success .swal2-success-ring {
            border: .25em solid rgb(165 220 134) !important;
        }


    </style>
</head>
<body class="bg-[--color1] pb-0 sm:pb-10">

<?php include "includes/Main_header.php"; ?>

<div class="container mx-auto xl:px-14 p-4">
    <main class="w-full flex gap-10">
        <aside class="2xl:basis-[15%] lg:basis-[18.5%] lg:block hidden relative">
            <div class="sticky top-8">
                <button class="bg_gr h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative newDescription">
                    New Discussion
                </button>
                <ul class="list-none mt-8 w-full left_side_ul">
                    <li class="w-full mt-2">
                        <a class="group w-full py-2 px-3 rounded-[14px] transition-all duration-300 flex justify-start items-center hover:bg-[--color8] text-white hover:text-[--color5] tracking-wide active"
                           href="">
                            <span class="group-hover:bg-[--color5] group-hover:h-[20px] inline-block w-[8px] bg-[--color3] h-[16px] rounded-[14px] me-2 transition-all duration-300"></span>
                            All Threads
                        </a>
                    </li>
                    <li class="w-full mt-2">
                        <a class="group w-full py-2 px-3 rounded-[14px] transition-all duration-300 flex justify-start items-center hover:bg-[--color8] text-white hover:text-[--color5] tracking-wide"
                           href="">
                            <span class="group-hover:bg-[--color5] group-hover:h-[20px] inline-block w-[8px] bg-[--color3] h-[16px] rounded-[14px] me-2 transition-all duration-300"></span>
                            Lorem ipsum.
                        </a>
                    </li>
                    <li class="w-full mt-2">
                        <a class="group w-full py-2 px-3 rounded-[14px] transition-all duration-300 flex justify-start items-center hover:bg-[--color8] text-white hover:text-[--color5] tracking-wide"
                           href="">
                            <span class="group-hover:bg-[--color5] group-hover:h-[20px] inline-block w-[8px] bg-[--color3] h-[16px] rounded-[14px] me-2 transition-all duration-300"></span>
                            Lorem ipsum dolor.
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="2xl:basis-[66.5%] lg:basis-[81.5%] basis-full">
            <header class="flex md:flex-row md:justify-between flex-col items-start md:items-center md:gap-0 gap-4">
                <div class="select-wrapper flex gap-3">
                    <select class="min-w-[114px] text-[14px] tracking-wide bg-[--color7] text-[--color4] px-5 flex justify-center items-center h-[40px] rounded-[14px] webkit_appearance cursor-pointer outline-0"
                            id="filter1"
                            name="filter1">
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="">Latest</option>
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="channels">Discussion</option>
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="trending">Popular This</option>
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="popular">Popular All</option>
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="answered">Solved</option>
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="answered">Unsolved</option>
                        <option class="bg-card-900 text-grey-600 rounded-[14px]" value="fresh">No Replies Yet</option>
                    </select>
                    <select class="min-w-[114px] text-[14px] tracking-wide bg-[--color7] text-[--color4] px-5 flex justify-center items-center h-[40px] rounded-[14px] webkit_appearance cursor-pointer outline-0"
                            id="filter2"
                            name="filter2">
                        <option class="bg-card-900 text-grey-600" value="design">Design</option>
                        <option class="bg-card-900 text-grey-600" value="devops">DevOps</option>
                        <option class="bg-card-900 text-grey-600" value="eloquent">Eloquent</option>
                        <option class="bg-card-900 text-grey-600" value="envoyer">Envoyer</option>
                        <option class="bg-card-900 text-grey-600" value="site-improvements">Feedback</option>
                        <option class="bg-card-900 text-grey-600" value="filament">Filament</option>
                        <option class="bg-card-900 text-grey-600" value="forge">Forge</option>
                        <option class="bg-card-900 text-grey-600" value="general-discussion">General</option>
                        <option class="bg-card-900 text-grey-600" value="guides">Guides</option>
                        <option class="bg-card-900 text-grey-600" value="inertia">Inertia</option>
                        <option class="bg-card-900 text-grey-600" value="javascript">JavaScript</option>
                        <option class="bg-card-900 text-grey-600" value="laravel">Laravel</option>
                        <option class="bg-card-900 text-grey-600" value="livewire">Livewire</option>
                        <option class="bg-card-900 text-grey-600" value="lumen">Lumen</option>
                        <option class="bg-card-900 text-grey-600" value="elixir">Mix</option>
                        <option class="bg-card-900 text-grey-600" value="nova">Nova</option>
                        <option class="bg-card-900 text-grey-600" value="php">PHP</option>
                        <option class="bg-card-900 text-grey-600" value="react">React</option>
                        <option class="bg-card-900 text-grey-600" value="requests">Requests</option>
                        <option class="bg-card-900 text-grey-600" value="reverb">Reverb</option>
                        <option class="bg-card-900 text-grey-600" value="servers">Servers</option>
                        <option class="bg-card-900 text-grey-600" value="spark">Spark</option>
                        <option class="bg-card-900 text-grey-600" value="testing">Testing</option>
                        <option class="bg-card-900 text-grey-600" value="tips">Tips</option>
                        <option class="bg-card-900 text-grey-600" value="vapor">Vapor</option>
                        <option class="bg-card-900 text-grey-600" value="vite">Vite</option>
                        <option class="bg-card-900 text-grey-600" value="vue">Vue</option>
                    </select>
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
                    <form action="/search" autocomplete="off" class="search-form flex md:w-auto w-full" method="post">
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
                                   name="search"
                                   placeholder="Search..."
                                   required type="text">
                        </label>
                    </form>
                </div>
            </header>
            <?php foreach ($questions as $question) { ?>
            <div class="conversation-list md:mt-8 mt-4 flex flex-col gap-3">
                <a class="conversation inline-block hover:bg-[--color2] transition-all duration-300 bg-[--color8] rounded-[14px] py-4 px-7 w-full"
                   href="#">
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
                                <div class="flex items-center justify-center">
                                    <svg class="relative text-card-200" height="19" style="top: -2px;"
                                         viewBox="0 0 15 10"
                                         width="15">
                                        <path d="M7.5 0C3.344 0 0 2.818 0 6.286c0 1.987 1.094 3.757 2.781 4.914l.117 2.35c.022.438.338.58.704.32l2.023-1.442c.594.144 1.219.18 1.875.18 4.156 0 7.5-2.817 7.5-6.285C15 2.854 11.656 0 7.5 0z"
                                              fill="#8EA5C2"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-left text-xs leading-none text-[--color9] font-bold ml-1"><?= $question['likes'] ?></span>
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

<?php include "includes/Main_header.php"; ?>

<!--Modal-->
<div class="overlay hidden w-full h-full fixed top-0 right-0 bg-black/40 z-[99] transition-all duration-500 backdrop-blur-[2px]"></div>

<div class="search-modal w-full md:max-w-[630px] bg-[--modal] h-full fixed top-0 -right-full z-[100] px-6 transition-all duration-500">
    <button class="group absolute top-[30px] right-[15px] flex justify-center items-center rounded-xl bg-[--color2] hover:bg-white p-3 transition-all duration-300"
            id="close_btn5">
        <svg class="fill-white group-hover:fill-[--color5]" viewBox="0 0 25 25" width="14">
            <path d="M22.222 0 25 2.778l-9.723 9.721L25 22.222 22.222 25 12.5 15.277 2.778 25 0 22.222 9.722 12.5 0 2.778 2.778 0 12.5 9.722 22.222 0z"
                  fill-rule="evenodd"></path>
        </svg>
    </button>
    <div class="w-full h-[5px] bg-[--color5] mt-4 rounded-[14px]"></div>
    <h5 class="text-center text-white mt-3 font-bold">Search</h5>
    <form action="" class="mt-5 w-full rounded-[14px] bg-[--color2] h-[50px] px-3 flex items-center">
        <button type="submit">
            <svg class="fill-[--color5]" height="20" viewBox="0 0 24 24" width="20">
                <path d="M16.041 15.856c-0.034 0.026-0.067 0.055-0.099 0.087s-0.060 0.064-0.087 0.099c-1.258 1.213-2.969 1.958-4.855 1.958-1.933 0-3.682-0.782-4.95-2.050s-2.050-3.017-2.050-4.95 0.782-3.682 2.050-4.95 3.017-2.050 4.95-2.050 3.682 0.782 4.95 2.050 2.050 3.017 2.050 4.95c0 1.886-0.745 3.597-1.959 4.856zM21.707 20.293l-3.675-3.675c1.231-1.54 1.968-3.493 1.968-5.618 0-2.485-1.008-4.736-2.636-6.364s-3.879-2.636-6.364-2.636-4.736 1.008-6.364 2.636-2.636 3.879-2.636 6.364 1.008 4.736 2.636 6.364 3.879 2.636 6.364 2.636c2.125 0 4.078-0.737 5.618-1.968l3.675 3.675c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414z"></path>
            </svg>
        </button>
        <input autofocus class="w-full h-full bg-transparent placeholder-gray-400 pl-4 outline-0 text-white"
               id="search_input"
               name="search_input"
               placeholder="Search..." required type="text">
    </form>
    <div class="suggest px-4">
        <h5 class="text-white mt-7 font-bold">Suggested Searches</h5>
        <div class="sug-items1 mt-3 flex gap-2.5 flex-wrap justify-center">
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">laravel</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">react</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">java
                script</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">laravel</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">react</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">java
                script</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">laravel</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">react</a>
            <a class="sug-item px-4 py-2 rounded-[14px] bg-[--color2] w-fit text-white font-bold text-[14px]" href="#">java
                script</a>
        </div>
        <h5 class="text-white mt-7 font-bold">Recommended Results</h5>
        <div class="sug-items2 mt-3 flex gap-2.5 flex-col item-center">
            <a class="sug-item2 px-4 py-2.5 rounded-[14px] bg-[--color2] w-full text-white font-bold text-[14px]"
               href="#">
                <img alt="" class="w-[40px] rounded-full float-start" src="images/avatar.png">
                <h4 class="ml-14">psfopiposifkg</h4>
                <h5 class="ml-14 text-[14px] text-gray-500">Updated August 7, 2024</h5>
            </a>
            <a class="sug-item2 px-4 py-2.5 rounded-[14px] bg-[--color2] w-full text-white font-bold text-[14px]"
               href="#">
                <img alt="" class="w-[40px] rounded-full float-start" src="images/avatar.png">
                <h4 class="ml-14">psfopiposifkg</h4>
                <h5 class="ml-14 text-[14px] text-gray-500">Updated August 7, 2024</h5>
            </a>
            <a class="sug-item2 px-4 py-2.5 rounded-[14px] bg-[--color2] w-full text-white font-bold text-[14px]"
               href="#">
                <img alt="" class="w-[40px] rounded-full float-start" src="images/avatar.png">
                <h4 class="ml-14">psfopiposifkg</h4>
                <h5 class="ml-14 text-[14px] text-gray-500">Updated August 7, 2024</h5>
            </a>
        </div>
    </div>
</div>

<div class="login-modal sm:w-[600px] w-full hidden transition-all duration-500 rounded-[14px] bg-[--modal2] fixed top-1/2 translate-y-1/2 right-1/2 translate-x-1/2 z-[100] border border-[--color3] px-12">
    <button class="group absolute top-[15px] right-[15px] flex justify-center items-center rounded-xl bg-[--color2] hover:bg-white p-3 transition-all duration-300"
            id="close_btn1">
        <svg class="fill-white group-hover:fill-[--color5]" viewBox="0 0 25 25" width="14">
            <path d="M22.222 0 25 2.778l-9.723 9.721L25 22.222 22.222 25 12.5 15.277 2.778 25 0 22.222 9.722 12.5 0 2.778 2.778 0 12.5 9.722 22.222 0z"
                  fill-rule="evenodd"></path>
        </svg>
    </button>
    <h2 class="mt-10 font-bold text-center text-[32px] text-white">Log In</h2>
    <form action="">
        <div class="input-box mt-4">
            <label class="text-[--color6] font-bold" for="login_email">Email</label>
            <div class="input relative">
                <input autofocus
                       class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                       id="login_email"
                       name="login_email"
                       placeholder="Email..." required type="email">
                <div class="peer-invalid:bg-gray-400 peer-valid:bg-green-600 h-4 w-4 rounded-full flex justify-center items-center absolute top-1/2 -translate-y-1/2 right-[10px]">
                    <svg height="8" viewBox="0 0 10 8" width="10">
                        <path d="M3.533 5.646l-2.199-2.19c-.195-.194-.488-.194-.684 0-.195.195-.195.487 0 .682l2.883 2.87L9.055 1.51c.195-.194.195-.487 0-.681-.196-.195-.49-.195-.685 0L3.533 5.646z"
                              fill="#FFF" fill-rule="evenodd" stroke="#FFF"
                              stroke-width=".728"></path>
                    </svg>
                </div>
            </div>
            <label class="text-[--color6] font-bold block mt-4" for="login_password">Password</label>
            <div class="input relative">
                <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                       id="login_password" minlength="8"
                       name="login_password"
                       placeholder="Password..." required="required" type="password">
                <div class="peer-invalid:bg-gray-400 peer-valid:bg-green-600 h-4 w-4 rounded-full flex justify-center items-center absolute top-1/2 -translate-y-1/2 right-[10px]">
                    <svg height="8" viewBox="0 0 10 8" width="10">
                        <path d="M3.533 5.646l-2.199-2.19c-.195-.194-.488-.194-.684 0-.195.195-.195.487 0 .682l2.883 2.87L9.055 1.51c.195-.194.195-.487 0-.681-.196-.195-.49-.195-.685 0L3.533 5.646z"
                              fill="#FFF" fill-rule="evenodd" stroke="#FFF"
                              stroke-width=".728"></path>
                    </svg>
                </div>
            </div>
            <button class="bg_gr mt-10 h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative"
                    type="submit">
                Log In
            </button>
            <button class="h-[40px] w-full rounded-[14px] flex justify-center items-center bg-[--color2] font-medium mt-4 hover:bg-[--color3] transition-all duration-300 text-[--color4]">
                <svg class="transition-all mr-2" viewBox="0 0 30 29" width="14">
                    <path class="fill-[--color4]"
                          d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z"
                          fill-rule="nonzero"></path>
                </svg>
                Log In With GitHub?
            </button>
            <div class="flex justify-between items-center mt-6 mb-12">
                <a class="text-[--color4] font-medium hover:underline" href="#">Forgot Your Password?</a>
                <a class="text-[--color4] font-medium hover:underline" href="#">Sign Up!</a>
            </div>
        </div>
    </form>
</div>

<div class="register-modal hidden sm:w-[600px] w-full transition-all duration-500 rounded-[14px] bg-[--modal2] fixed top-1/2 translate-y-1/2 right-1/2 translate-x-1/2 z-[100] border border-[--color3] px-12">
    <button class="group absolute top-[15px] right-[15px] flex justify-center items-center rounded-xl bg-[--color2] hover:bg-white p-3 transition-all duration-300"
            id="close_btn2">
        <svg class="fill-white group-hover:fill-[--color5]" viewBox="0 0 25 25" width="14">
            <path d="M22.222 0 25 2.778l-9.723 9.721L25 22.222 22.222 25 12.5 15.277 2.778 25 0 22.222 9.722 12.5 0 2.778 2.778 0 12.5 9.722 22.222 0z"
                  fill-rule="evenodd"></path>
        </svg>
    </button>
    <h2 class="mt-10 font-bold text-center text-[32px] text-white">Sign Up!</h2>
    <form action="">
        <div class="input-box mt-4">

            <label class="text-[--color6] font-bold block" for="register_user_name">Username</label>
            <div class="input relative">
                <input autofocus
                       class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                       id="register_user_name"
                       name="register_user_name"
                       placeholder="Username..." required type="text">
                <div class="peer-invalid:bg-gray-400 peer-valid:bg-green-600 h-4 w-4 rounded-full flex justify-center items-center absolute top-1/2 -translate-y-1/2 right-[10px]">
                    <svg height="8" viewBox="0 0 10 8" width="10">
                        <path d="M3.533 5.646l-2.199-2.19c-.195-.194-.488-.194-.684 0-.195.195-.195.487 0 .682l2.883 2.87L9.055 1.51c.195-.194.195-.487 0-.681-.196-.195-.49-.195-.685 0L3.533 5.646z"
                              fill="#FFF" fill-rule="evenodd" stroke="#FFF"
                              stroke-width=".728"></path>
                    </svg>
                </div>
            </div>

            <label class="text-[--color6] font-bold block mt-4" for="register_email">Email</label>
            <div class="input relative">
                <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                       id="register_email" name="register_email"
                       placeholder="Email..."
                       required type="email">
                <div class="peer-invalid:bg-gray-400 peer-valid:bg-green-600 h-4 w-4 rounded-full flex justify-center items-center absolute top-1/2 -translate-y-1/2 right-[10px]">
                    <svg height="8" viewBox="0 0 10 8" width="10">
                        <path d="M3.533 5.646l-2.199-2.19c-.195-.194-.488-.194-.684 0-.195.195-.195.487 0 .682l2.883 2.87L9.055 1.51c.195-.194.195-.487 0-.681-.196-.195-.49-.195-.685 0L3.533 5.646z"
                              fill="#FFF" fill-rule="evenodd" stroke="#FFF"
                              stroke-width=".728"></path>
                    </svg>
                </div>
            </div>

            <label class="text-[--color6] font-bold block mt-4" for="register_password">Password</label>
            <div class="input relative">
                <input class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                       id="register_password" minlength="8"
                       name="register_password"
                       placeholder="Password..." required="required" type="password">
                <div class="peer-invalid:bg-gray-400 peer-valid:bg-green-600 h-4 w-4 rounded-full flex justify-center items-center absolute top-1/2 -translate-y-1/2 right-[10px]">
                    <svg height="8" viewBox="0 0 10 8" width="10">
                        <path d="M3.533 5.646l-2.199-2.19c-.195-.194-.488-.194-.684 0-.195.195-.195.487 0 .682l2.883 2.87L9.055 1.51c.195-.194.195-.487 0-.681-.196-.195-.49-.195-.685 0L3.533 5.646z"
                              fill="#FFF" fill-rule="evenodd" stroke="#FFF"
                              stroke-width=".728"></path>
                    </svg>
                </div>
            </div>
            <button class="bg_gr mt-10 h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative"
                    type="submit">
                Register
            </button>
            <button class="h-[40px] w-full rounded-[14px] flex justify-center items-center bg-[--color2] font-medium mt-4 hover:bg-[--color3] transition-all duration-300 text-[--color4]">
                <svg class="transition-all mr-2" viewBox="0 0 30 29" width="14">
                    <path class="fill-[--color4]"
                          d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z"
                          fill-rule="nonzero"></path>
                </svg>
                Register Using GitHub?
            </button>
            <div class="flex justify-center items-center mt-6 mb-12">
                <a class="text-[--color4] font-medium hover:underline" href="#">Already Have an Account?</a>
            </div>
        </div>
    </form>
</div>

<div class="discussion-modal hidden sm:w-[600px] w-full transition-all duration-500 rounded-[14px] bg-[--modal2] fixed top-1/2 translate-y-1/2 right-1/2 translate-x-1/2 z-[100] border border-[--color3] px-12">
    <button class="group absolute top-[15px] right-[15px] flex justify-center items-center rounded-xl bg-[--color2] hover:bg-white p-3 transition-all duration-300"
            id="close_btn3">
        <svg class="fill-white group-hover:fill-[--color5]" viewBox="0 0 25 25" width="14">
            <path d="M22.222 0 25 2.778l-9.723 9.721L25 22.222 22.222 25 12.5 15.277 2.778 25 0 22.222 9.722 12.5 0 2.778 2.778 0 12.5 9.722 22.222 0z"
                  fill-rule="evenodd"></path>
        </svg>
    </button>
    <h2 class="mt-10 font-bold text-center text-[32px] text-white">New Discussion!</h2>
    <form action="">
        <div class="input-box mt-4">
            <label class="text-[--color6] font-bold block" for="title">Title</label>
            <div class="input relative">
                <input autofocus
                       class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center h-[42px] w-full placeholder-gray-500 outline-0 text-white"
                       id="title"
                       name="title"
                       placeholder="Title..." required type="text">
            </div>

            <label class="text-[--color6] font-bold block mt-4" for="description">Description</label>
            <div class="input relative">
                <textarea
                        class="peer mt-1 rounded-lg px-3 bg-[--color8] flex items-center p-2 w-full placeholder-gray-500 outline-0 text-white"
                        id="description" minlength="8"
                        name="description"
                        placeholder="Description..." required="required" rows="5"></textarea>
            </div>
            <button class="bg_gr mt-10 h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative mb-12"
                    type="submit">
                Create Discussion
            </button>
        </div>
    </form>
</div>

<div class="menu-modal h-full sm:w-[600px] w-full hidden transition-all duration-500 rounded-[14px] bg-[--modal2] fixed top-1/2 translate-y-1/2 right-1/2 translate-x-1/2 z-[100] border border-[--color3] px-12 pb-5 flex-col justify-center items-center">
    <button class="group absolute top-[15px] right-[15px] flex justify-center items-center rounded-xl bg-[--color2] hover:bg-white p-3 transition-all duration-300"
            id="close_btn4">
        <svg class="fill-white group-hover:fill-[--color5]" viewBox="0 0 25 25" width="14">
            <path d="M22.222 0 25 2.778l-9.723 9.721L25 22.222 22.222 25 12.5 15.277 2.778 25 0 22.222 9.722 12.5 0 2.778 2.778 0 12.5 9.722 22.222 0z"
                  fill-rule="evenodd"></path>
        </svg>
    </button>
    <h2 class="mt-5 font-bold text-center text-[32px] text-white">
        <a href="">Main</a>
    </h2>
    <h2 class="mt-5 font-bold text-center text-[32px] text-white">
        <a href="">Contact Us</a>
    </h2>
    <h2 class="mt-5 font-bold text-center text-[32px] text-white">
        <a href="">About Us</a>
    </h2>
</div>

<button class="bg-[--color5] w-[50px] h-[50px] flex justify-center items-center rounded-full fixed bottom-[20px] right-[10px] newDescription">
    <img alt="" src="images/reply-mobile-button.svg">
</button>

<script src="./node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
    function ValidateEmail(event) {
        if (event.target.email.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) === null) {
            event.preventDefault();

            Swal.fire({
                title: "Validation Error",
                text: "Email validation error",
                icon: "error"
            });
        }
    }
</script>
<script src="./js/script.js"></script>
</body>
</html>