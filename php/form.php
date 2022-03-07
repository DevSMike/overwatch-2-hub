
<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Анкета</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/article.css">
  <link rel="icon" type="../image/jpg" href="icons/icon.jpg" />
</head>
<body id="top">
<header class="header">
    <div class="wrapper">
        <div class="header__wrapper">
          
           <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
             <a class="navbar-brand" href="https://overwatch2.playoverwatch.com/ru-ru/trailer">OVERWATCH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="../article.html" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Статья
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../article.html#OW2">Overwatch 2 - анонсирование</a></li>
                            <li><a class="dropdown-item" href="../article.html#story">Сюжет игры</a></li>
                            <li><a class="dropdown-item" href="../article.html#system">Системные требования</a></li>
                            <li><a class="dropdown-item" href="../article.html#difference">Отличия от первой части</a></li>
						</ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="../graphic.html">Статистика</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../notes.html">Заметки</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link active" href="form.php">Анкета</a>
                    </li>
					<li class ="nav-item">
					  <a class = "nav-link " href="../api.html"> Внешний API </a>
					</li>
                </ul>
            </div>
        </div>
    </nav>
            <div class="menu-burger__header">
                <span></span>
            </div>
        </div>
    </div>
</header>
<main class="main">
    <div class="wrapper">
        <div class="form__wrapper">
            <h1 class="heading">Регистрация нового пользователя</h1>
            <form id="form" class="contact-form" action="create.php" method="post" name="contact-form" enctype="multipart/form-data">
                <div class="short__input">
                    <label for="surname">
                        <p>Фамилия:</p>
                        <input type="text" placeholder="Введите фамилию" name="surname" minlength="1" maxlength="12" required>
                    </label>
                    <label for="name">
                        <p>Имя:</p>
                        <input type="text" placeholder="Введите имя" name="name" minlength="1" maxlength="12" required>
                    </label>
                    <label for="patronymic">
                        <p>Отчество <span>(необязательно)</span>:</p>
                        <input type="text" placeholder="Введите отчество" name="patronymic" maxlength="12">
                    </label>
                    <label for="email">
                        <p>Email:</p>
                        <input type="email" placeholder="example@mail.ru" name="email" required>
                    </label>
                    <label for="password">
                        <p>Пароль:</p>
                        <input type="password" id="password" name="password" minlength="8" maxlength="12" placeholder="Введите пароль" required>
                    </label>
                    <label for="secondpassword" id="passwordInput">
                        <p>Повторите пароль:</p>
                        <input type="password" name="secondpassword" id="secondpassword" minlength="8" maxlength="12" placeholder="Подтвердите пароль" required>
<!--                        <p id="invalidPassword"></p>-->
                    </label>
                    <label for="role">
                        <p>Роль пользователя:</p>
                        <select name="role" id="#role" required>
                            <option>Выберите роль</option>
                            <option value="admin">Администратор</option>
                            <option value="user">Пользователь</option>
                        </select>
                    </label>
                    <label for="reputation">
                        <p>Репутация пользователя:</p>
                        <input type="number" name="reputation" placeholder="от 1 до 10" min="1" max="10" required>
                    </label>
                    <label for="date">
                        <p>Дата регистрации:</p>
                        <input type="date" name="date" required>
                    </label>
                </div>
                <hr>
                <label for="image" class="choice__img">
                    <p>Выберите аватар <span>(до 1Мб, *.png, *.jpeg)</span>:</p>
                    <input type="file" name="img" placeholder="До 1Мб" accept="image/jpeg, image/png">
                </label>
                <label for="about">
                    <p>О себе <span>(Необязательно)</span>:</p>
                    <textarea name="about" id="about" placeholder="Расскажите о себе..."></textarea>
                </label>
                <hr>
                <button type="button" onclick="validatePassword()" class="form__button">Отправить</button>
                <button type="reset" class="form__button">Очистить форму</button>
            </form>
        </div>
    </div>
</main>

<script src="../js/lightbox-plus-jquery.js"></script>
<script src="../js/validPassword.js"></script> 
<script src="../js/bootstrap.min.js"></script>
</body>
</html>