<!doctype html>
<html lang="en">

<?php include "../components/head.php" ?>

<body>
    <?php include "../actions/guestCheck.php" ?>
    <main class="container my-5 w-50 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Register
                </h3>
            </div>
            <div class="card-body">
                <form action="../actions/signUp.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id="name"
                            placeholder="Masukan Nama Anda" />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            placeholder="abc@mail.com" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="password"
                            placeholder="Masukan Password Anda" />
                    </div>

                    <input type="submit" name="button" value="Register" class="btn btn-primary">

                </form>
            </div>
        </div>
    </main>

    <?php include "../components/footer.php" ?>

    <?php include "../components/scripts.php" ?>
</body>

</html>