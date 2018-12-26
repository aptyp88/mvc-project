MVC
Model - классы для работы с данными
View - вывод данных
Controller - классы логики 

class User
{
    foo login()
    {
        view('login.php');
    }

    foo userlogin()
    {
        проверка формы
        $user = userModel($email, $pass);
        if(user != null)
        {

        }
        else
        {

        }
        view('login.php')
    }
}

project/user/login
project/user/userLogin

Д/З
Подключить bootstrap в header.php и footer.php
В хедер вывести navbar в этом меню должны быть ссылки на главную и на страницу регистрации и входа на сайт

страница регистрации должна быть вида /user/register

