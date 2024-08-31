<script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
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
<script src="/js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    
    $(document).ready(function () {
        
        // log out
        $("#logout_main").click(function () {

            const xhttp = new XMLHttpRequest();
            xhttp.onload = function () {
                window.alert("you got out");
                location.reload();
            }
            xhttp.open("GET", "/main/logout", true);
            xhttp.send();
        }) 
        
        let data = window.location.search.substring(1).trim();

        if (data.substring(0, 6) === "status") {
            let value = data.substring(7).trim()
            if (value === "correct"){
                alert("welcome")
                window.location.replace("/")
            }else if (value === "incorrect"){
                alert("incorrect info")
                window.location.replace("/")
            }
            else if (value === "signup"){
                alert("welcom")
                window.location.replace("/")
            }
            else if (value === "fsignup"){
                alert("change username")
                window.location.replace("/")
            }
            else if (value === "addquestion"){
                window.alert("your question added . wait for confirmed by admins")
                location.replace("/")
            }
            else if (value === "addreply"){
                window.alert("your reply added")
                location.replace("/")
            }
            else if (value === "MainUpdateAccont"){
                window.alert("your accont updated")
                location.replace("/manage/profile")
            }
            else if (value === "fMainUpdateAccont"){
                window.alert("change the username")
                location.replace("/manage/edit")
            }
        }

    })
</script>