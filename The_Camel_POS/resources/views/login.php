
<h1 id="ft"> The Camel Market..</h1>
<form  method="POST" action="/authenticate" id="login">
        <?php if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>

            <div class='alert alert-danger mb-3' role='alert'>

                <?= $_SESSION['error'] ?>

            </div>

        <?php

            $_SESSION['error'] = null;

        endif; ?>


    <!-- Main container for all inputs -->
    <div  id="flogin">

        <!-- Please Enter Username -->
        <h3> login page </h3>

        <label for="admin-username">Enter username</label>
        <input type="text" placeholder="Please Enter Username" name="username" required id="admin-username">
        <br><br>
        <!--Please Enter Password -->
        <label for="admin-password">Enter Password</label>
        <input type="password" placeholder="Please Enter Password" name="password" required id="admin-password">
        <br>
        <button type="submit" class="btn btn-primary">Sing Up</button>
        <!-- login link -->

        <div class="mb-3 form-check">

            <input type="checkbox" class="form-check-input" id="remember" name="remember_me">

            <label class="form-check-label" for="remember-me">Remember Me</label>

        </div>       
    </div>
</form>
