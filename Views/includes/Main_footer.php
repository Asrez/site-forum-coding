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
                <img alt="" class="w-[230px]" src="../static/<?= $logo['value_setting'] ?>">
                <p class="text-[--color9] font-medium mt-4 lg:text-left text-center">
                    <?= $footer['content'] ?></p>
            </div>
            <div class="lg:basis-1/2 basis-full h-full flex justify-center gap-20 lg:justify-start lg:gap-9">
            </div>
        </div>
        <div class="flex justify-center lg:mt-0 mt-10 lg:justify-start items-center gap-2">
            <a class="h-[40px] w-[40px] bg-[--color2] hover:bg-[--color3] transition-all duration-300 rounded-md"
               href="<?= $youtube['link'] ?>">
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
               href="<?= $twitter['link'] ?>">
                <svg class="transition-all w-full p-2 text-grey-600" fill="none" viewBox="0 0 23 20">
                    <path d="m.759 0 8.24 11.018-8.292 8.958h1.866l7.26-7.843 5.866 7.843h6.35L13.347 8.338 21.064 0h-1.866l-6.686 7.223L7.11 0H.759zm2.745 1.375H6.42L19.305 18.6h-2.918L3.504 1.375z"
                          fill="#8AA1BE"></path>
                </svg>
            </a>
            <a class="h-[40px] w-[40px] bg-[--color2] hover:bg-[--color3] transition-all duration-300 rounded-md"
               href="<?= $github['link'] ?>">
                <svg class="transition-all w-full p-2 text-grey-600" viewBox="0 0 30 29">
                    <path d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z"
                          fill="#8AA1BE"
                          fill-rule="nonzero"></path>
                </svg>
            </a>
        </div>
        <div class="mt-5 border-t border-gray-600">
            <p class="text-[--color6] font-bold text-[12px] text-center mt-3">© Laracasts 2024.all copy right by <?= $footer['value_setting'] ?></p>
            <p class="text-[--color6] font-bold text-[12px] text-center mt-2">Proudly hosted with Laravel Forge and
                DigitalOcean.</p>
        </div>
    </footer>
</div>