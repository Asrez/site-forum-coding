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
<!--Header-->
<header class="top-header mb-0 sm:mb-8 h-[73px] w-full border-b-[0.001rem] border-white/5 flex justify-between items-center px-3 sm:px-[30px] relative before:content-[''] before:w-full before:h-[19px] before:m-0 before:z-[-1] before:p-0 before:block before:absolute before:top-[38%] before:left-0 before:opacity-25">
    <div class="xl:flex-1 basis-[40px] flex justify-start">
        <a href="index.html"><img alt="" class="w-[40px]" src="images/logo-triangle.svg"></a>
    </div>
    <div class="flex-1 hidden md:flex xl:justify-center xl:ms-0 ms-10 justify-start h-full items-center">
        <a class="font-bold tracking-[0.05rem] text-[--color6] hover:text-white transition-all duration-300 relative h-full items-center flex justify-center before:w-full before:h-[4px] before:bg-[--color5] before:content-[''] before:inline-block before:absolute before:bottom-0 before:start-0 before:rounded-[5px] before:transition-all before:duration-300 before:opacity-0 hover:before:opacity-100 active"
           href="#">FORUM</a>
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
        <button class="h-[40px] w-[77px] rounded-[14px] hidden md:flex justify-center items-center bg-[--color2] font-bold tracking-wide hover:bg-[--color3] transition-all duration-300 text-[--color4] text-[14px]"
                id="signIn_btn">
            Sign In
        </button>
        <button class="bg_gr h-[40px] w-[163px] rounded-[14px] hidden md:flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative"
                id="signUp_btn">
            Get Started
        </button>
        <button class="h-[40px] w-[40px] md:hidden rounded-[14px] flex flex-col justify-center gap-1 items-end bg-[--color2] text-white hover:bg-[--color3] transition-all duration-300 text-[--color4] pe-2"
                id="hamburger_btn">
            <span class="w-[24px] h-[3px] rounded-full bg-white"></span>
            <span class="w-[19px] h-[3px] rounded-full bg-white"></span>
            <span class="w-[14px] h-[3px] rounded-full bg-white"></span>
        </button>
    </div>
</header>

<!--Main-->
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
                        <button class="sort1 rounded-lg w-[32px] hidden sm:flex justify-center items-center h-[32px] hover:bg-[--color3] bg-[--color2]">
                            <svg class="mx-2" height="15" viewBox="0 0 15 15" width="15">
                                <g class="fill-white" fill-rule="evenodd">
                                    <rect class="forum-excerpt-toggle-line" height="4" rx="2" width="15"></rect>
                                    <rect class="forum-excerpt-toggle-line" height="4" rx="2" width="8" y="11"></rect>
                                    <rect class="forum-excerpt-toggle-line" height="4" rx="2" width="15" y="5.5"></rect>
                                </g>
                            </svg>
                        </button>
                        <button class="sort2 rounded-lg w-[32px] hidden sm:flex justify-center items-center h-[32px] hover:bg-[--color3] bg-[--color2] active">
                            <svg class="mx-2" height="15" viewBox="0 0 15 15" width="15">
                                <g class="fill-white" fill-rule="evenodd">
                                    <rect class="forum-excerpt-toggle-line" height="6" rx="2" width="15"></rect>
                                    <rect class="forum-excerpt-toggle-line" height="6" rx="2" width="15" y="9"></rect>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <form action="/" autocomplete="off" class="search-form flex md:w-auto w-full">
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
            <div class="conversation-list md:mt-8 mt-4 flex flex-col gap-3">
                <a class="conversation inline-block hover:bg-[--color2] transition-all duration-300 bg-[--color8] rounded-[14px] py-4 px-7 w-full"
                   href="#">
                    <figure class="inline-flex justify-center float-start items-start w-[52px]">
                        <img alt="" class="rounded-[14px]" loading="lazy" src="./images/avatar.png">
                    </figure>
                    <div class="content w-[calc(100%-80px)] float-end h-full inline-flex flex-col  align-top">
                        <div class="float-start flex flex-col sm:flex-row gap-2 sm:gap-0 sm:justify-between sm:items-center w-full">
                            <h4 class="tracking-normal font-bold text-white text-[20px] line-clamp-1">502 Error when I
                                include a UTM parameter</h4>
                            <div class="flex gap-3">
                                <div class="flex items-center justify-center">
                                    <svg class="text-card-200" height="13" viewBox="0 0 19 13" width="19">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M0-3h19v19H0z"></path>
                                            <path d="M9.5.562C5.542.562 2.161 3.025.792 6.5c1.37 3.475 4.75 5.937 8.708 5.937s7.339-2.462 8.708-5.937C16.838 3.025 13.458.562 9.5.562zm0 9.896A3.96 3.96 0 0 1 5.542 6.5 3.96 3.96 0 0 1 9.5 2.542 3.96 3.96 0 0 1 13.458 6.5 3.96 3.96 0 0 1 9.5 10.458zm0-6.333A2.372 2.372 0 0 0 7.125 6.5 2.372 2.372 0 0 0 9.5 8.875 2.372 2.372 0 0 0 11.875 6.5 2.372 2.372 0 0 0 9.5 4.125z"
                                                  fill="#8EA5C2"></path>
                                        </g>
                                    </svg>
                                    <span class="text-left text-xs leading-none text-[--color9] font-bold ml-1">16</span>
                                </div>
                                <div class="flex items-center justify-center">
                                    <svg class="relative text-card-200" height="19" style="top: -2px;"
                                         viewBox="0 0 15 10"
                                         width="15">
                                        <path d="M7.5 0C3.344 0 0 2.818 0 6.286c0 1.987 1.094 3.757 2.781 4.914l.117 2.35c.022.438.338.58.704.32l2.023-1.442c.594.144 1.219.18 1.875.18 4.156 0 7.5-2.817 7.5-6.285C15 2.854 11.656 0 7.5 0z"
                                              fill="#8EA5C2"
                                              fill-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-left text-xs leading-none text-[--color9] font-bold ml-1">16</span>
                                </div>
                                <div class="w-[112px] h-[32px] rounded-[14px] border border-green-500 flex justify-center items-center text-green-500 hover:bg-green-500 hover:text-white tracking-wide font-bold text-[14px] transition-all duration-300">
                                    Eloquent
                                </div>
                            </div>
                        </div>
                        <div class="conversation-information w-full mt-4 flex flex-col items-start gap-1 sm:flex-row-reverse font-bold text-[13px] sm:justify-between">
                            <p class="font-bold text-[--color9] text-[12px]">Posted 15 minutes ago</p>
                            <div class="flex gap-1 text-white">
                                <div class="text-[--color5]">Tray2</div>
                                replied
                                <time class="font-semibold">2 minutes ago</time>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="pagination mt-4 flex justify-center items-center gap-2 flex-row-reverse">
                <a class="rounded-[14px] bg-[--color7] text-white px-4 py-2 font-bold text-[13px]" href="#">Next</a>
                <a class="rounded-[14px] bg-[--color7] text-white px-4 py-2 font-bold text-[13px]" href="#">Previous</a>
            </div>
        </div>
        <aside class="basis-[18.5%] hidden 2xl:block">
            <div class="sticky top-8">
                <div class="w-full rounded-[14px] bg-custom-gradient overflow-hidden relative p-3">
                    <h5 class="text-left font-bold leading-tighter tracking-wide text-white w-[65%] text-xl text-[19px]">
                        Level Up Your
                        Programming with <span class="text-blue-300">Laracasts</span></h5>
                    <img alt="" class="absolute top-0 right-0 w-[105px]"
                         src="./images/sidebar/sidebar-join-laracasts-robot.webp">
                    <p class="mt-4 text-center text-xs font-bold text-white tracking-[0.05rem]">$19 a month for
                        everything
                        we know about programming. Everything!</p>
                    <button class="bg_gr h-[40px] w-full rounded-[14px] flex justify-center items-center font-bold transition-all duration-300 text-white text-[14px] relative mt-4 tracking-normal">
                        Join Laracasts Today!
                    </button>
                </div>
                <a class="w-full rounded-[14px] mt-4 bg-[--color7] transition-all duration-300 hover:bg-[--color8] overflow-hidden relative p-3 flex flex-col items-center justify-start gap-3"
                   href="#">
                    <figure class="flex justify-center items-center">
                        <img alt="" class="h-[85px]" src="./images/sidebar/how-to-contribute-to-open-source.svg">
                    </figure>
                    <h6 class="line-clamp-1 font-bold tracking-[0.05rem] text-white text-center w-[210px]">How to
                        Contribute
                        to Open Source</h6>
                    <p class="line-clamp-2 tracking-[0.05rem] text-center w-[210px] text-[14px] text-[--color4]">Armed
                        with
                        a computer, some git knowledge, and an idea, any of us can contribute to the frameworks and
                        packages
                        that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So
                        let's
                        go on a journey together, as we take an idea for Laravel Prompts from musings to merging.
                        Learning
                        the basic processes will put you in good stead for contributing your own ideas.</p>
                    <div class="bg-[--color2] tracking-[0.05rem] text-[13px] text-[--color4] py-1.5 px-4 rounded-full">
                        Recommended Series
                    </div>
                </a>
                <a class="w-full rounded-[14px] mt-4 bg-[--color7] transition-all duration-300 hover:bg-[--color8] overflow-hidden relative p-3 flex flex-col items-center justify-start gap-3"
                   href="#">
                    <figure class="flex justify-center items-center">
                        <img alt="" class="h-[85px]"
                             src="./images/sidebar/d2ce9d569f5af686a03dfbebb343f38eb801fe67.jfif">
                    </figure>
                    <p class="line-clamp-3 tracking-[0.05rem] text-center w-[210px] text-[14px] text-white">Armed with a
                        computer, some git knowledge, and an idea, any of us can contribute to the frameworks and
                        packages
                        that we use every day. Cool as that may be, it can initially be a daunting experience.&nbsp;So
                        let's
                        go on a journey together, as we take an idea for Laravel Prompts from musings to merging.
                        Learning
                        the basic processes will put you in good stead for contributing your own ideas.</p>
                    <div class="tracking-[0.05rem] text-[12px] text-[--color4] py-1.5 px-4 rounded-full">ads via Carbon
                    </div>
                </a>
            </div>
        </aside>
    </main>
</div>

<!--Footer-->
<div class="container mx-auto xl:px-14 p-4">
    <footer class="sm:px-10 px-5 py-5 rounded-[14px] bg-[--color8] w-full mt-0 sm:mt-8">
        <h1 class="w-full text-center text-[32px] text-white font-bold mt-12">Want us to email you occasionally <br>
            with Laracasts news?</h1>
        <div class="w-full flex justify-center items-center">
            <form action=""
                  class="mt-12 w-full sm:max-w-[500px] max-w-full flex items-center justify-center bg-[--color2] pl-4 px-1.5 py-1.5 rounded-[14px]"
                  onsubmit="ValidateEmail(event)">
                <input class="text-white w-full email_validation h-[40px] bg-transparent outline-0 placeholder-gray-500"
                       id="email"
                       name="email" placeholder="Email address"
                       type="text">
                <button class="bg_gr h-[40px] rounded-lg flex justify-center items-center font-bold tracking-wide transition-all duration-300 text-white text-[14px] relative w-full max-w-[160px]">
                    Subscribe
                </button>
            </form>
        </div>
        <div class="footer-items w-full mt-12 flex lg:gap-80 gap-4 lg:flex-nowrap flex-wrap">
            <div class="lg:basis-1/2 basis-full h-full flex-grow flex-1 flex flex-col justify-between lg:items-start items-center">
                <img alt="" class="w-[230px]" src="./images/logo-white.svg">
                <p class="text-[--color9] font-medium mt-4 lg:text-left text-center">Nine out of ten doctors recommend
                    Laracasts over competing
                    brands. Come inside, see for yourself, and massively level up your development skills in the
                    process.</p>
            </div>
            <div class="lg:basis-1/2 basis-full h-full flex justify-center gap-20 lg:justify-start lg:gap-9">
                <div>
                    <h3 class="text-white text-[20px] font-bold lg:text-left text-center">Learn</h3>
                    <ul class="mt-3">
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Sign
                            Up</a></li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Sign
                            In</a></li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Pricing</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Series</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">CreatorSeries</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Laravel
                            Path</a></li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Larabits</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Topics</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-[20px] font-bold lg:text-left text-center">Discuss</h3>
                    <ul class="mt-3">
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Forum</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Podcast</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Blog</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Support</a>
                        </li>
                        <li class="lg:text-left text-center"><a class="text-[--color9] font-bold text-[13px]" href="#">Work
                            With Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex justify-center lg:mt-0 mt-10 lg:justify-start items-center gap-2">
            <a class="h-[40px] w-[40px] bg-[--color2] hover:bg-[--color3] transition-all duration-300 rounded-md"
               href="https://www.youtube.com/">
                <svg class="transition-all w-full p-2 text-grey-600" viewBox="0 0 16 19">
                    <g class="fill-current" fill-rule="nonzero">
                        <path d="M6.4 0H5.371l-.685 2.629L4 0H2.857c.229.686.457 1.257.686 1.943.343.914.571 1.714.571 2.171v2.743h1.029V4.114L6.4 0zm2.743 5.143V3.429c0-.572-.114-.915-.343-1.258-.229-.342-.571-.457-1.029-.457-.457 0-.8.229-1.028.572-.229.228-.343.571-.343 1.143v1.828c0 .572.114.914.343 1.143.228.343.571.457 1.028.457.458 0 .8-.228 1.029-.571.229-.115.343-.572.343-1.143zm-.914.228c0 .458-.115.686-.458.686-.342 0-.457-.228-.457-.686V3.2c0-.457.115-.686.457-.686.343 0 .458.229.458.686v2.171zm4.342 1.486V1.714h-.914V5.6c-.228.343-.343.457-.571.457a.246.246 0 0 1-.229-.228V1.714h-.914v4c0 .343 0 .572.114.8 0 .229.229.343.572.343.342 0 .685-.228 1.028-.571v.571h.914zM13.029 12c-.343 0-.458.229-.458.686v.457h.915v-.457c0-.457-.115-.686-.457-.686zM9.714 12c-.114 0-.343.114-.457.229v3.085c.114.115.343.229.457.229.229 0 .343-.229.343-.686v-2.171c0-.457-.114-.686-.343-.686z"
                              fill="#8AA1BE"></path>
                        <path d="M15.314 9.486C15.086 8.686 14.4 8 13.714 8 11.886 7.771 9.943 7.771 8 7.771c-1.943 0-3.771 0-5.714.229-.686 0-1.372.686-1.6 1.486-.229 1.143-.229 2.4-.229 3.543 0 1.142 0 2.4.229 3.542.228.8.8 1.372 1.6 1.486 1.943.229 3.771.229 5.714.229 1.943 0 3.771 0 5.714-.229.8-.114 1.486-.686 1.6-1.486.229-1.142.229-2.4.229-3.542 0-1.143 0-2.4-.229-3.543zM4.8 10.514H3.657v5.829H2.63v-5.829H1.6V9.486h3.2v1.028zm2.743 5.829h-.914v-.572c-.343.458-.686.572-1.029.572-.343 0-.457-.114-.571-.343 0-.114-.115-.343-.115-.8v-4h.915v4c0 .114.114.229.228.229.229 0 .343-.115.572-.458V11.2h.914v5.143zm3.428-1.6c0 .457 0 .8-.114 1.028-.114.343-.343.572-.686.572-.342 0-.685-.229-.914-.572v.458h-.914V9.486h.914v2.171c.343-.343.572-.571.914-.571.343 0 .572.228.686.571.114.229.114.572.114 1.029v2.057zm3.429-.8h-1.829v.914c0 .457.115.686.458.686.228 0 .342-.114.457-.343v-.571h.914V15.314c0 .229-.114.343-.229.572-.228.343-.571.571-1.142.571-.458 0-.8-.228-1.143-.571-.229-.229-.343-.686-.343-1.143v-1.714c0-.572.114-.915.228-1.143.229-.343.572-.572 1.143-.572.457 0 .8.229 1.029.572.228.228.228.685.228 1.143v.914h.229z"
                              fill="#8AA1BE"></path>
                    </g>
                </svg>
            </a>
            <a class="h-[40px] w-[40px] bg-[--color2] hover:bg-[--color3] transition-all duration-300 rounded-md"
               href="https://twitter.com/">
                <svg class="transition-all w-full p-2 text-grey-600" fill="none" viewBox="0 0 23 20">
                    <path d="m.759 0 8.24 11.018-8.292 8.958h1.866l7.26-7.843 5.866 7.843h6.35L13.347 8.338 21.064 0h-1.866l-6.686 7.223L7.11 0H.759zm2.745 1.375H6.42L19.305 18.6h-2.918L3.504 1.375z"
                          fill="#8AA1BE"></path>
                </svg>
            </a>
            <a class="h-[40px] w-[40px] bg-[--color2] hover:bg-[--color3] transition-all duration-300 rounded-md"
               href="https://github.com/">
                <svg class="transition-all w-full p-2 text-grey-600" viewBox="0 0 30 29">
                    <path d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z"
                          fill="#8AA1BE"
                          fill-rule="nonzero"></path>
                </svg>
            </a>
        </div>
        <div class="mt-5 border-t border-gray-600">
            <p class="text-[--color6] font-bold text-[12px] text-center mt-3">© Laracasts 2024. All rights reserved.
                Yes, all of them. That means you, Todd.</p>
            <p class="text-[--color6] font-bold text-[12px] text-center mt-2">Proudly hosted with Laravel Forge and
                DigitalOcean.</p>
        </div>
    </footer>
</div>

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