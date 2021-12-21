<?php
    session_start();
    require ('header.php');
    if( !isset($_SESSION['logged_user'])){
        header('Location: ..index.php');
        exit;
    }
?>
<div id="wrapperauth" class="wrapperauth">
    <div id="form-auth" class="form-auth ">
        <form action="# " method="post " id="form_log " class="form__body ">
            <h1 class="form__title ">Вход</h1>
            <div class="form__item ">
                <input id="formLogin " placeholder="Логин " type="text " name="E-mail " class="form__input _req _email " />

            </div>
            <div class="form__item ">
                <input id="formPassword " placeholder="Пароль " type="text " name="password " class="form__input _req " />

            </div>

            <button type="submit " class="form__button ">Войти</button>
            <button type="submit " class="form__button_ ">Регистрация</button>

        </form>
    </div>
</div>
        ?>
    </form>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/main.js"></script>
</body>
</html>