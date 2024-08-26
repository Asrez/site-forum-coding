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