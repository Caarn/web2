<?php
    session_start();
    include_once('header.php');
?>
	<div id="wrapperreg" class="wrapperreg">
    <div id="popupReg" class="form-register">
        <form action="# " method="post " id="form_reg " class="form__body ">
            <h1 class="form__title ">Регистрация</h1>
            <div class="form__item ">
                <input id="formName " placeholder="Имя " type="text " name="name " class="form__input _req " />

            </div>
            <div class="form__item ">
                <input id="formEmail " placeholder="E-mail " type="text " name="E-mail " class="form__input _req _email " />

            </div>
            <div class="form__item ">
                <input id="formPhone " placeholder="Телефон " type="text " name="phone " class="form__input _req " />

            </div>
            <div class="form__item ">
                <input id="formPassword " placeholder="Пароль " type="text " name="password " class="form__input _req " />

            </div>
            <div class="form__item ">
                <input id="formCheckPassword " placeholder="Повторите пароль " type="text " name="check_password " class="form__input _req " />

            </div>
            <div class="checkbox ">
                <input id="formAgreement2 " checked="checked " type="checkbox " name="agreement " class="checkbox__input _req ">
                <label for="formAgreement2 " class="checkbox__label "><span>Я даю свое согласие на обработку персональных данных в соответствии с <a href=" ">условиями</a>*</span></label>
            </div>
            <button type="submit " class="form__button ">Зарегистрироваться</button>
            <button type="submit " class="form__button_ ">Уже есть аккаунт? Войти</button>

        </form>
    </div>


</div>
			<button class="btn btn-primary mb-3">Регистрация</button>
			<?php
            if(isset($_SESSION['message'])){
				echo '<p class = "msg"> ' . $_SESSION['message'] .' </p>';
				unset($_SESSION['message']);
			}
			?>
		</form>
	</div>
</body>
</html>