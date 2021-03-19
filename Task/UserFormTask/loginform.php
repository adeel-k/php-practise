<!DOCTYPE html>
<html>

<CENTER>
<h2>  Login Form  </h2>
    <br><br><br>


    <div id="id01" class="modal">

    <form class="modal-content animate" action="Userform.php" method="post">


        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <br><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br><br>
            <button type="submit"> Login </button>
            <label>
                <input type="checkbox" aria-checked="aria-checked" name="remember"> Remember me
            </label>
        </div>

        <br><br>

        <div class="container" style="background-color:cadetblue">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="SignUp.php">password?</a></span>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</CENTER>
</html>
