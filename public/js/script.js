const elm_SEARCH_BTN = document.querySelector("#search_btn");
const elm_NEW_DESCRIPTION_BTN = document.querySelectorAll(".newDescription");
const elm_NEW_REPLAY_BTN = document.querySelectorAll("#newReplay");
const elm_SIGN_IN_BTN = document.querySelector("#signIn_btn"); // login
const elm_SIGN_UP_BTN = document.querySelector("#signUp_btn"); // register
const elm_HAMBURGER_BTN = document.querySelector("#hamburger_btn"); // register

const elm_CLOSE_BTN1 = document.querySelector("#close_btn1");
const elm_CLOSE_BTN2 = document.querySelector("#close_btn2");
const elm_CLOSE_BTN3 = document.querySelector("#close_btn3");
const elm_CLOSE_BTN4 = document.querySelector("#close_btn4");
const elm_CLOSE_BTN5 = document.querySelector("#close_btn5");
const elm_CLOSE_BTN6 = document.querySelector("#close_btn6");
const sortElements = document.querySelectorAll("[class^=sort]");
const elm_OVERLAY = document.querySelector(".overlay")
const elm_SEARCH_MODAL = document.querySelector(".search-modal")
const elm_SIGN_IN_MODAL = document.querySelector(".login-modal")
const elm_SIGN_UP_MODAL = document.querySelector(".register-modal")
const elm_NEW_DESCRIPTION_MODAL = document.querySelector(".discussion-modal")
const elm_HAMBURGER_MODAL = document.querySelector(".menu-modal")
const elm_REPLAY_MODAL = document.querySelector(".replay-modal")

// Functions

function showOverlay() {
    elm_OVERLAY.style.opacity = "0"
    elm_OVERLAY.style.display = "block"
    setTimeout(() => {
        elm_OVERLAY.style.opacity = "1"
    }, 0)
}

function hideOverlay() {
    elm_OVERLAY.style.opacity = "0"
    setTimeout(() => {
        elm_OVERLAY.style.display = "none"
    }, 500)
}

function removeScroll() {
    document.body.style.overflow = "hidden"
}

function addScroll() {
    document.body.style.overflow = "auto"
}

function setBeforeStyle()
{
    document.querySelectorAll(".activity>div>div:last-child>div").forEach((item) => {
        if (item.nextElementSibling !== null) {
            const item1Bottom = item.children[0].getBoundingClientRect().bottom;
            const item2Top = item.nextElementSibling.children[0].getBoundingClientRect().top;
            const verticalGap = Math.round(item2Top - item1Bottom);
            document.documentElement.style.setProperty('--before', `${verticalGap + 5}px`);
            item.children[0].classList.add("before:content-['']", "before:inline-block", "before:w-[3px]", `before:h-[--before]`, "before:bg-[--color8]", "before:absolute", "before:top-[42px]")
        }
    })
}


// Elements
// Open Modal
if (elm_SIGN_IN_BTN !== null) {

    elm_SIGN_IN_BTN.addEventListener("click", () => {
    showOverlay()
    elm_SEARCH_MODAL.style.right = "0"
    document.querySelector(".search-modal input[autofocus]").focus()
    removeScroll()
})
}

elm_HAMBURGER_BTN.addEventListener("click", () => {
    showOverlay()
    elm_HAMBURGER_MODAL.style.opacity = "0"
    elm_HAMBURGER_MODAL.style.display = "flex"
    setTimeout(() => {
        elm_HAMBURGER_MODAL.style.opacity = "1"
        elm_HAMBURGER_MODAL.style.transform = "translate(50%, -50%)";
    }, 0)
    // document.querySelector(".search-modal input[autofocus]").focus()
    removeScroll()
})
if (elm_SIGN_IN_BTN !== null) {

elm_SIGN_IN_BTN.addEventListener("click", () => {
    showOverlay()
    elm_SIGN_IN_MODAL.style.opacity = "0"
    elm_SIGN_IN_MODAL.style.display = "block"
    setTimeout(() => {
        elm_SIGN_IN_MODAL.style.opacity = "1"
        elm_SIGN_IN_MODAL.style.transform = "translate(50%, -50%)";
    }, 0)
    document.querySelector(".login-modal input[autofocus]").focus()
    removeScroll()
})
}

if (elm_SIGN_UP_BTN !== null) {

elm_SIGN_UP_BTN.addEventListener("click", () => {
    showOverlay()
    elm_SIGN_UP_MODAL.style.opacity = "0"
    elm_SIGN_UP_MODAL.style.display = "block"
    setTimeout(() => {
        elm_SIGN_UP_MODAL.style.opacity = "1"
        elm_SIGN_UP_MODAL.style.transform = "translate(50%, -50%)";
    }, 0)
    document.querySelector(".register-modal input[autofocus]").focus()
    removeScroll()
})
}
if (elm_NEW_DESCRIPTION_BTN !== null) {
    elm_NEW_DESCRIPTION_BTN.forEach((item) => {
        item.addEventListener("click", () => {
            console.log('gfgfhfgh');
            
            showOverlay()
            elm_NEW_DESCRIPTION_MODAL.style.opacity = "0"
            elm_NEW_DESCRIPTION_MODAL.style.display = "block"
            setTimeout(() => {
                elm_NEW_DESCRIPTION_MODAL.style.opacity = "1"
                elm_NEW_DESCRIPTION_MODAL.style.transform = "translate(50%, -50%)";
            }, 0)
            document.querySelector(".discussion-modal input[autofocus]").focus()
            removeScroll()
        })
    })
}

if (elm_NEW_REPLAY_BTN !== null) {
    elm_NEW_REPLAY_BTN.forEach((item) => {
        item.addEventListener("click", () => {
            showOverlay()
            elm_REPLAY_MODAL.style.opacity = "0"
            elm_REPLAY_MODAL.style.display = "block"
            setTimeout(() => {
                elm_REPLAY_MODAL.style.opacity = "1"
                elm_REPLAY_MODAL.style.transform = "translate(50%, -50%)";
            }, 0)
            document.querySelector(".replay-modal input[autofocus]").focus()
            removeScroll()
        })
    })
}

sortElements.forEach(function (element) {
    element.addEventListener("click", function () {
        sortElements.forEach(function (el) {
            el.classList.remove("active");
        });
        this.classList.add("active");
    });
});

// Events
// Overlay And CloseBtn
elm_OVERLAY.addEventListener("click", () => {
    hideOverlay()
    // elm_SEARCH_MODAL.style.right = "-100%"
    elm_SIGN_IN_MODAL.style.opacity = "0"
    elm_SIGN_IN_MODAL.style.transform = "translate(50%, 50%)";
    elm_SIGN_UP_MODAL.style.opacity = "0"
    elm_SIGN_UP_MODAL.style.transform = "translate(50%, 50%)";
    elm_NEW_DESCRIPTION_MODAL.style.opacity = "0"
    elm_NEW_DESCRIPTION_MODAL.style.transform = "translate(50%, 50%)";
    elm_HAMBURGER_MODAL.style.opacity = "0"
    elm_HAMBURGER_MODAL.style.transform = "translate(50%, 50%)";
    elm_REPLAY_MODAL.style.opacity = "0"
    elm_REPLAY_MODAL.style.transform = "translate(50%, 50%)";
    addScroll()
})
elm_CLOSE_BTN1.addEventListener("click", () => {
    hideOverlay()
    elm_SIGN_IN_MODAL.style.opacity = "0"
    elm_SIGN_IN_MODAL.style.transform = "translate(50%, 50%)";
    addScroll()
})
elm_CLOSE_BTN2.addEventListener("click", () => {
    hideOverlay()
    elm_SIGN_UP_MODAL.style.opacity = "0"
    elm_SIGN_UP_MODAL.style.transform = "translate(50%, 50%)";
    addScroll()
})
elm_CLOSE_BTN3.addEventListener("click", () => {
    hideOverlay()
    elm_NEW_DESCRIPTION_MODAL.style.opacity = "0"
    elm_NEW_DESCRIPTION_MODAL.style.transform = "translate(50%, 50%)";
    addScroll()
})
elm_CLOSE_BTN4.addEventListener("click", () => {
    hideOverlay()
    elm_HAMBURGER_MODAL.style.opacity = "0"
    elm_HAMBURGER_MODAL.style.transform = "translate(50%, 50%)";
    addScroll()
})
// elm_CLOSE_BTN5.addEventListener("click", () => {
//     hideOverlay()
//     elm_SEARCH_MODAL.style.right = "-100%"
//     addScroll()
// })
elm_CLOSE_BTN6.addEventListener("click", () => {
    hideOverlay()
    elm_REPLAY_MODAL.style.opacity = "0"
    elm_REPLAY_MODAL.style.transform = "translate(50%, 50%)";
    addScroll()
})


document.querySelectorAll("pre.code-box").forEach((item) => {
    item.nextElementSibling.innerText = item.childNodes[0].outerText
    item.children[1].addEventListener("click", () => {
        navigator.clipboard.writeText(item.nextElementSibling.innerText)
        item.children[1].innerText = "Copied"
        setTimeout(() => {
            item.children[1].innerText = "Copy"
        }, 2000)
    })
})

setBeforeStyle()
addEventListener("resize", (event) => {
    setBeforeStyle()
});
