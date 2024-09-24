<!doctype html>
<html lang="en">

<?php include "../components/head.php" ?>

<body>
    <?php include "../actions/guestCheck.php" ?>
    <main class="container my-5 w-50 mx-auto">
        <?php include "../components/alert.php" ?>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    Login
                </h3>
            </div>
            <div class="card-body">
                <form action="../actions/signIn.php" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            id="email"
                            placeholder="abc@mail.com"
                            value="<?= isset($_SESSION['value_email']) ? $_SESSION['value_email'] : '' ?>" />
                        <!-- Untuk menghapus data value_email yang ada di session -->
                        <?php unset($_SESSION['value_email']) ?>

                        <!-- Mengecek Apakah ada data error_email di session -->
                        <?php if (isset($_SESSION['error_email'])) : ?>
                            <!-- Kalau ada di tampilkan -->
                            <small class="ms-2 text-danger"><?= $_SESSION['error_email'] ?></small>
                        <?php
                            // Kemudian hapus data error_email di session
                            unset($_SESSION['error_email']);
                        endif;
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            name="password"
                            id="password"
                            placeholder="Masukan Password Anda" />
                        <?php if (isset($_SESSION['error_password'])) : ?>
                            <small class="ms-2 text-danger"><?= $_SESSION['error_password'] ?></small>
                        <?php
                            unset($_SESSION['error_password']);
                        endif;
                        ?>
                    </div>
                    <input type="submit" name="button" value="Login" class="btn btn-primary">

                </form>
            </div>
        </div>

    </main>

    <?php include "../components/footer.php" ?>

    <?php include "../components/scripts.php" ?>
</body>

</html>