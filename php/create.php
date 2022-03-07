<?php
require_once '../php/functions.php';

$image = $_FILES["img"];

// валидация

// типы файлов, которые можно загружать
$types = ["image/jpeg", "image/png"];

// ищем в массиве с типами тип текущего файла
if (!in_array($image["type"], $types)) {
    die('Incorrect file type');
}

// определяем размер файла в мегабайтах
$fileSize = $image["size"] / 1000000;
// максимальный размер файла в мегабайтах
$maxSize = 1;

// проверяем, чтобы размер файла не превышал ограничение
if ($fileSize > $maxSize) {
    die('Incorrect file size');
}

// создаем папку uploads в корне проекта, если её нет
if (!is_dir('../uploads')) {
    mkdir('../uploads', 0777, true);
}

// изнаем расширение текущего файла
$extension = pathinfo($image["name"], PATHINFO_EXTENSION);
// формируем уникальное имя с помощью функции time()
$imgName = time() . ".$extension";

$fields = [
    'surname' => [
        'fields_name' => 'Фамилия',
    ],
    'name' => [
        'fields_name' => 'Имя',
    ],
    'patronymic' => [
        'fields_name' => 'Отчество',
    ],
    'email' => [
        'fields_name' => 'Email',
    ],
    'password' => [
        'fields_name' => 'Пароль',
    ],
    'secondpassword' => [
        'fields_name' => 'Подтверждения пароля',
    ],
    'role' => [
        'fields_name' => 'Роль',
    ],
    'reputation' => [
        'fields_name' => 'Репутация',
    ],
    'date' => [
        'fields_name' => 'Дата',
    ],
    'about' => [
        'fields_name' => 'О себе',
    ],
];


?>
<!doctype html>
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
                        <a class="nav-link active" href="№">Анкета</a>
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
        <div class="files">
            <?php
            $fields = load($fields);
                if (!is_dir('../users')) {
                    mkdir('../users', 0777, true);
                }
                $str = loadText($fields);
                $fileTxtName = time() . '.txt';
                file_put_contents("../users/" . $fileTxtName, $str);

                // загружаем файл и проверяем
                // если во премя загрузки файла произошла ошибка, возвращаем die()
                if (!move_uploaded_file($image["tmp_name"], "../uploads/" . $imgName)) {
                    die('Ошибка загрузки');
                }
                $urlIMG = "../uploads/{$imgName}";
                echo '<h1 class="heading">Все прошло успешно!</h1>';
                $url = "../users/$fileTxtName";
                $txtFile = basename($url);
            ?>
            <div class="image">
                <a href="<?= $urlIMG ?>" data-lightbox="image-5" data-title="">
                    <img src="<?= $urlIMG ?>" alt="">
                </a>
            </div>
            <?php echo '<a href="../users/' . $txtFile . '" download="">Скачать файл c данными</a>';?>
            <br><br><br>
        </div>
    </div>
</main>

<script src="../js/lightbox-plus-jquery.js"></script>
</body>
</html>



