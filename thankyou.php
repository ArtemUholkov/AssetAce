<?php 
$email=$_POST["email"];
$name=$_POST["name"];
$surname=$_POST["surname"];
$tel=$_POST["tel"];
$desc=$_POST["invest"];



$fields = [
    //Required fields
    'api_key'   => '8ffdfd397a69886917a2fb2e147dc6f5', //Your API_KEY
    'map_id'   => 1156,    //Track map
    'email'  => $email, //Email (login)
    'first_name' => $name, //First name
    'second_name' => $surname, //Last name
    'phone' => $tel, //Phone number
    'country' => 'RU', //Country
    'language' => 'ru', //Language
    'campaign' => 'campaign value', //Campaign
    'description' => $desc, //Description
    'password' => 'FKS353@df', //Cabinet password. Must contain at least 8 symbols, uppercase letter and special symbol.

    //Additional fields added if necessary after approval from manager
    //...
];

$data = http_build_query($fields);
$url = 'https://bestcliq.tech/api/v1/AddLead';

if ($curl = curl_init()) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($curl);

    curl_close($curl);

    $out = json_decode($response, true);

    print_r($out);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <!--FONTS-->

    <!--title/favicon-->
    <title>Asset Ace - Настоящая прибыль</title>
    <link rel="icon" type="image/x-icon" href="img/global/favicon.png" />
    <!--title/favicon-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/thankyou.css" />

  </head>
<body>
<section class="main_picture">
      <div class="main_content_wrapper">
        <p class="thankyou_thankyou">
            Спасибо! Мы скоро с Вами свяжемся!
        </p>
        <a href="index.html"  class="main_button form_button">На главную</a>
      </div>
      
    </section>
</body>
</html>