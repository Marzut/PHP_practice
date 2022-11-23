<!DOCTYPE html>
<html>

<head>
    <title>Site of Jackie Jan</title>
    <link rel="stylesheet" href="style/style.css" />
</head>

<body>
    <div class='container'>


        <div class='header'>
            <?php include 'top.inc.php'?>
        </div>

        <div class='greetings'>
            <h1><?php echo $Hello ?></h1>
        </div>

        <div class="description">
             <?php echo "Меня зовут $fullname и мне $age лет,<br>"
                ." я родился в $country"?>
        </div>

        <div class="image">
            <img src="img/jackie.jpeg">
        </div>


        <div class="article">
            <p class="text">Дже́ки Чан (англ. Jackie Chan; иер. трад.
                 陳港生, кант.-рус.: Чхань Конса́н, палл.: Чэнь Ганшэ́н,
                  буквально: «Чхань, рождённый в Гонконге»; в Китае 
                  наиболее известен под сценическим псевдонимом Син Лун
                   или Чэн Лун, кит. 成龍, иногда упоминается как Фон Силун[5];
                    род. 7 апреля 1954[1][2][3][…], Пик Виктория, Британский Гонконг[4])[6
                    ] — гонконгский актёр, каскадёр, кинорежиссёр, кинопродюсер, сценарист,
                     постановщик трюков и боевых сцен, певец, филантроп, мастер боевых искусств.
                      Посол доброй воли ЮНИСЕФ. Кавалер ордена Британской империи[7],
                       главный режиссёр Чанчуньской киностудии — старейшей киностудии в КНР.</p>
        </div>
    
        <?php include 'footer.php'?>
    
    </div>

</body>

</html>