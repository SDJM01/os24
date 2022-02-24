<?php

//Функция для проверки фильтрации
function FilterCondition($where, $add, $and = true)
{
    if ($where){
        if ($and) $where .= " AND $add";

    }
    else {
        $where = $add;
    }
    return $where;
}

function CategoryListOutput($Nameoftable)//Функция для вывода списка у категорий пиццы
{

    $items = [];
    //Выбираем покупателей из таблицы по номеру
    $sql = "SELECT outlet_name FROM " . $Nameoftable;
    $pdo =new PDO("mysql:host=localhost;dbname=agency", "root");
    $result = $pdo->query($sql);
    while($row = $result->fetch())
    {
        $items[] = $row;
    }
    return $items;
}


function OutPutRequest()
{
    $items = [];
    //Подключение к БД
    $pdo = new PDO("mysql:host=localhost;dbname=agency", "root");
    //Select-запрос для вывода значений из 2-ух таблиц
    $sql = "SELECT holidays.id, holidays.image, holidays.name, holidays.outlet, holidays.receipture, holidays.price, outlets.outlet_name as  'holidays', outlets.id
        FROM  holidays
        JOIN  outlets ON holidays.outlets_id = outlets.id";
    $arBinds = [];
    //Если не нажата кнопка очистить фильтр
    if (!key_exists('clearFilter', $_GET)) {
        if (count($_GET) > 0) {

            $where = "";
            //htmlspecialchars преобразует 5 символов в html-сущности (&,",',<, >)
            if ($_GET['name'])
            {
                //Переменная для условия выборки
                $where = FilterCondition($where, " holidays.name = :name");
                //Заносим в массив значения из таблицы БД
                $arBinds['name'] = $_GET['name'];
            }
            if ($_GET['outlet'])
            {
                //Переменная для условия выборки
                $where = FilterCondition($where, " holidays.outlet = :outlet");
                //Заносим в массив значения из таблицы БД
                $arBinds['outlet'] = $_GET['outlet'];
            }

            if ($_GET['price'])
            {
                //Переменная для условия выборки
                $where = FilterCondition($where, " holidays.price = :price");
                //Заносим в массив значения из таблицы БД
                $arBinds['price'] = $_GET['price'];
            }


            if ($where) {
                $sql .= " WHERE  $where";
            }

        }
        //echo $sql;
        //Защита от swl-инъекций посредством execute и prepare
        $stmt = $pdo->prepare($sql);
        $stmt->execute($arBinds);
        foreach ($stmt as $row)
        {
            $items[] = $row;
        }
        return $items;
    }
    //Если нажата кнопка очистить фильтр, то очищаем
    if (key_exists('clearFilter', $_GET)) {
        ResetFilter();
    }

}


?>

