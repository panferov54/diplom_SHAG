<div class="   align-items-center p-3 px-md-4 mb-3 " style="background-color: #4b4e6d;margin-top: 20px;">
    <div class="row">
        <div class="col-2">
            <a href="/" class="navbar-brand mr-md-auto text-warning float-left " style="line-height: 20px ">by_n<i class="far fa-circle small"></i>FF
                <br> <span class="small" style="letter-spacing: 1px;">blog</span></a>
        </div>
        <div class="col-10 float-right" >
            <div class="dropdown float-right" style="padding-right: 8px;">
                <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" style="height: 50px;width: 150px;font-size: 25px">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu text-center">
                    <nav class="my-2 my-md-0  text-center  float-right">
                        <a class=" text-dark btn btn-warning mt-1 btnrad " href="/">Главная</a>
                        <a class=" text-dark btn btn-success mt-1 btnrad " href="/gallery.php">Галлерея</a>
                        <a class=" text-dark btn btn-warning mt-1 btnrad " href="/contacts.php">Контакты</a>

                        <?php
                        if($_COOKIE['login']!='')
                            echo '<a class="p-2 btn btn-info mt-1 btnrad " href="/article.php">Добавить статью</a>';
                        ?>


                        <?php
                        if($_COOKIE['login']==''):
                        ?>
                        <div class="">
                            <a class=" btn btn-primary mt-1 btnrad" href="/auth.php">Логин</a>
                            <a class=" btn btn-primary mt-1 btnrad" href="/reg.php">Регистрация</a>
                            <?php
                            else:
                                ?>
                                <a class="btn btn-primary mt-1 btnrad" href="/auth.php">Кабинет пользователя</a>
                            <?php
                            endif;
                            ?>


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>



</div>


