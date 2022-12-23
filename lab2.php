<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна №2</title>
    <link rel="stylesheet" href="web-styless.css">
</head>
<body>
    <header>
        <nav>
           <ul class="align-menu">
            <li class="elements"><a class="hover" href="lab2.html">Головна</a></li>
            <li class="elements"><a class="hover" href="about.html">Про сайт</a></li>
            <li class="elements"><a class="hover" href="discounts.html">Знижки</a></li>
           </ul>
        </nav>
        <button class="btn1">Day</button>
        <button class="btn2">Night</button>
        <?php
			$today = date("F j, Y");
    		echo "<p><a>Today is $today</a></p>";
		?>
    </header>
    <main id="main" class="day">
        <div class="columns">
            <div class="left-column">
                <ul class="left-menu">
                    <li class="elements"><a class="hover" href="">Оголошення</a></li>
                    <li class="elements"><a class="hover" href="">Підтримка</a></li>
                    <li class="elements"><a class="hover" href="">Ваш профіль</a></li>
                    <li class="elements"><a class="hover" href="">Надіслати повідомлення продавцю</a></li>
                    <li class="elements"><a class="hover" href="">Більше...</a></li>
                </ul>
            </div>
            <div class="right-column">
                <ol>
                    <li class="hover"><a class="hover" href="">Cтільці</a></li>
                    <li class="hover"><a class="hover" href="">Столи</a></li>
                    <li class="hover"><a class="hover" href="">Шаф</a></li>
                    <li class="hover"><a class="hover" href="">Крісла</a></li>
                    <li class="hover"><a class="hover" href="">Дивани</a></li>
                </ol>
                <table border="1">
                    <tr>
                        <td colspan="2" class="column">Меблі</td>
                    </tr>
                    <tr>
                        <td>Кухня</td>
                        <td>Полички, сервант, шкафчики, мийка.</td>
                    </tr>
                    <tr>
                        <td>Спальня</td>
                        <td>Ліжко, шафа, робочий стіл, комод.</td>
                    </tr>
                    <tr>
                        <td>Вітальня</td>
                        <td>диван, журнальний стіл, книжкова шафа. </td>
                    </tr>
                </table>
                <button class="butVid">Натисни для перегляду відео</button>
                <iframe id="video" class="hide" width="560" height="315" src="https://www.youtube.com/embed/ZvxMbyswuQs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="rent">
            <div class="add">
                <h1>Залишити відгук</h1>
                <p>Ваш відгук буде доступним для всіх</p>
                <form action="comment.php" method="POST">
                    <div>
                        <input type="text" name="name" id="name" placeholder="Ім'я"  required>
                        <input type="text" name="email" id="email" placeholder="E-mail">
                    </div>

                    <div id="message">
                        <input type="text" name="message" id="message" placeholder="Повідомлення" required>
                    </div>
                    <input type="submit" class="btn-rent">
                </form>	
            </div>
            
            <?php
                $data =  mysqli_query($connection, "SELECT * FROM `comments` ORDER BY `id` DESC LIMIT 3");
            ?>
            <div class="comments">
                <h1>Нещодавні</h1>
                <?php
                    while ($cat = mysqli_fetch_assoc($data)) {
                        ?>
                            <div id="card">
                                <h3><?php echo $cat['name']?></h3>
                                <p><?php echo $cat['comment']?></p>
                            </div>
                        <?php
                    }
                ?>
            </div>
	    </div>
    </main>
    <footer>
        <button class="contacts">Contact us</button>
        <div id="cont-block" class="hide">
            <p class="hover">Нечитайло Антон Олександрович</p>
            <p class="hover">anton380969658858@gmail.com</p>
            <p class="hover">Тел.+380969658858</p>
        </div>
    </footer>
    <script src = "java.script.js"></script>
</body>
</html>