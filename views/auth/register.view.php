<?php require "views/components/head.php" ?>
<h1>Register</h1>


<form method="POST">
    <label>
        email:
        <input name="email" />
    </label>
    <label>
        Password: <span class="explanation">(Vajag vismaz 8 rakstzimes, 1 liela, 1 simbols, tu merkaki!)</span>
        <input name="Password" />
    </label>
    <?php if(isset($errors["email"])); { ?>
    <p><?= $errors["email"]?></p>
        <?php } ?>
    <button>Register</button>
</form>

<?php require "views/components/footer.php" ?>