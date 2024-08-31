<script src="../dist/libs/apexcharts/dist/apexcharts.min.js?1668287865" defer></script>
<script src="../dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1668287865" defer></script>
<script src="../dist/libs/jsvectormap/dist/maps/world.js?1668287865" defer></script>
<script src="../dist/libs/jsvectormap/dist/maps/world-merc.js?1668287865" defer></script>
<script src="../dist/js/tabler.min.js?1668287865" defer></script>
<script src="../dist/js/demo.min.js?1668287865" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script>
    
    $(document).ready(function () {
        
        // log out
        $("#logout_panel").click(function () {

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

            if (value === "SettingUpdate"){
                window.alert("updated");
                location.replace("/manage/site_setting");
            }
            else if (value === "AddPost"){
                window.alert("insert post success");
                location.replace("/manage/post");
            }
            else if (value === "UpdatePost"){
                window.alert("update post success");
                location.replace("/manage/post");
            }
            else if (value === "DeletePost"){
                window.alert("delete post success");
                location.replace("/manage/post");
            }
            else if (value === "ConfimedPost"){
                window.alert("post confirmed");
                location.replace("/manage/post");
            }
            else if (value === "UpdateUser"){
                window.alert("update user successed");
                window.location.replace("/manage/user")
            }
            else if (value === "fUpdateUser"){
                alert("change username")
                window.location.replace("/manage/user")
            }
            else if (value === "UpdateAccont"){
                window.alert("your accont updated");
                location.replace("/panel");
            }
            else if (value === "fUpdateAccont"){
                window.alert("change the username");
                location.replace("/panel");
            }
            else if (value === "DeleteUser"){
                window.alert("delete user successed");
                location.replace("manage/user");
            }
            else if (value === "correct"){
                window.alert("welcome");
                location.replace("/panel");
            }
            else if (value === "incorrect"){
                window.alert("The information is incorrect");
                location.replace("/login");
            }
            else if (value === "DeleteImg"){
                window.alert("your image deleted");
            }
            else if (value === "nofill"){
                window.alert("some fields are not set")
                location.replace("/panel");
            }
        }

    })
</script>