<!-- include header -->
<?php $this->view('includes/header')?>
<?php $this->view('includes/navbar')?>

    <div class="mainSection">
        <div class="imageHolder">
            <a href="index.php"><img src="../public/assets/logo.png" alt="FoodForAll" width="400px"></a>
        </div>
        <div class="formHolder">
            <form method="post" class="form">
                <div class="formItemDiv">
                    <input type="text" name="user_name" class="inputField loginField" placeholder="User name or E-mail" id="username">
                </div>

                <div class="formItemDiv">
                    <input type="password" name="password" class="inputField loginField" id="password" placeholder="Password">
                </div>

                <div class="formItemDiv">
                    <input type="submit" value="Log in" class="purpleButton" id="loginButton">
                </div>

                <div class="formItemDiv">
                    <a href="password_reset.php" id="ForgottonPassword">Forgotton password?</a>
                </div>

                <hr width="390px">

                <div class="formItemDiv">
                    <button class="greenButton" id="signupButton">Create new account</button>
                </div>

            </form>
        </div>
    </div>

<!-- include footer -->
<?php $this->view('includes/footer')?>