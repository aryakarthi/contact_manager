<?php

  if (empty($_POST['name'])) {
    $nameErr = 'Name is required!';
  } else {
    $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if (empty($_POST['email'])) {
    $emailErr = 'Email is required!';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $validate_email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if(empty($validate_email)) {
      $emailErr = 'Invalid Email Format!';
    }
  }

  if (empty($_POST['mobile'])) {
    $mobileErr = 'Mobile No is required!';
  } else {
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_NUMBER_INT);

    $pattern = "/^[0-9]{10}$/";
      if (!preg_match($pattern, $mobile)) {
        $mobileErr = 'Invalid Mobile Number!';
      }
  }

  if (empty($_POST['city'])) {
    $cityErr = 'City is required!';
  } else {
    $city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }


?>