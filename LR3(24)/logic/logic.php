<?php


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

function CategoryListOutput($Nameoftable)//Функция для вывода названия заведений
{

    $items = [];
    $sql = "SELECT buyer_number FROM " . $Nameoftable;
    $pdo =new PDO("mysql:host=localhost;dbname=factory", "root");
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
    $pdo = new PDO("mysql:host=localhost;dbname=factory", "root");
    $sql = "SELECT furniture.furniture_id, furniture.photo, furniture.number, furniture.buyer, furniture.goods_content, furniture.product_weight, buyers.buyer_number as  'furniture', buyers.id
        FROM  furniture
        JOIN  buyers ON furniture.number_id = buyers.id";
    $arBinds = [];
    if (!key_exists('clearFilter', $_GET)) {
        if (count($_GET) > 0) {

            $where = "";
            //htmlspecialchars преобразует 5 символов в html-сущности (&,",',<, >)
            if ($_GET['buyer'])
            {
                $where = FilterCondition($where, " furniture.buyer = :buyer");
                $arBinds['buyer'] = htmlspecialchars($_GET['buyer']);
            }
            if ($_GET['product_weight'])
            {
                $where = FilterCondition($where, " furniture.product_weight = :product_weight");
                $arBinds['product_weight'] = htmlspecialchars($_GET['product_weight']);
            }

            if ($_GET['number'])
            {
                $where = FilterCondition($where, " furniture.number = :number");
                $arBinds['number'] = htmlspecialchars($_GET['number']);
            }


            if ($where) {
                $sql .= " WHERE  $where";
            }

        }
        //echo $sql;

        $stmt = $pdo->prepare($sql);
        $stmt->execute($arBinds);
        foreach ($stmt as $row)
        {
            $items[] = $row;
        }
        return $items;
    }
    if (key_exists('clearFilter', $_GET)) {
        ResetFilter();
    }

}


?>

