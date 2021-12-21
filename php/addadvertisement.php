<?php
    session_start();
    require_once 'operationWithDataBase.php';
    $advertisement_title = $_POST['advertisement_title'];
    $description = $_POST['description'];
    $mail = $_SESSION['logged_user'];

    if (empty($advertisement_title) && empty($description) && empty($price))
    {
        $_SESSION['message'] = 'Заполните все поля';
        header('Location: ../pages/useraddadvertisement.php');
        exit();
    }
    if( !isset($_FILES['photo']) || $_FILES['photo']['error'] == UPLOAD_ERR_NO_FILE) {
        header('Location: ../pages/useraddadvertisement.php');
        exit();
    }
    

    $add_adv = addAdvertisement($advertisement_title, $description, (int)$price, $path_photo, $mail);
    if(!$add_adv){
        unlink('../'. $path_photo);
        $_SESSION['message'] = 'Ошибка записи в бд';
        header('Location: ../pages/useraddadvertisement.php');
        exit();
    } else{
        unset($_SESSION['message']);
        header('Location: ../index.php');
    }
