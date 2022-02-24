<?php
require_once 'logic.php';
$fullList = OutPutRequest();
$optionList = CategoryListOutput('outlets');
$filterreset = $_SERVER['REQUEST_URI'];
$filterreset = strtok($filterreset, '?');
?>




<nav class="navbar navbar-expand-lg">
<!--Тело с выводом данных таблицы и фильтром-->
<div class="main">
    <div>
        <form action="furniture.php" method="get" >
            <label>Фильтрация результата поиска</label>

            <div class="mb-3">
                <label>По фамилии покупателя:</label>


                <select name="name" class="form-select" aria-label="Default select example">
                    <option value="" selected>Выберите название праздника</option>
                    <?php foreach ($optionList as $optionItem): ?>
                        <option value="--><? htmlspecialchars($optionItem['id'])?>"><?=htmlspecialchars($optionItem['outlet_name'])?></option>
                    <?php endforeach;?>

                </select>

                <!--               <input class="form-control mt-3"  name="category" type="text" placeholder="Введите категорию пиццы">-->

                <!--                <input class="form-control mt-3" name="menu_category" type="text" placeholder="Выберите вид пиццы">-->
            </div>
            <div class="mb-3">
                <label>Фильтрация по месту проведения:</label>
                <input class="form-control mt-3"  name="outlet" type="number" placeholder="Введите количество килограмм">

            </div>


            <div class="mb-3">
                <label>Фильтрация цене:</label>
                <input class="form-control mt-3" type="text" name="price" placeholder="Введите стоимость">
            </div>

            <input type="submit" value="Применить фильтр" class="btn btn-primary">
            <input  href="<?php echo $filterreset; ?>" type="reset" name="ClearFilter" value="Сбросить фильтр" class="btn btn-danger">
            </label>
        </form>
    </div>

    <div class="text-center mt-3">
        <?php if(count(array($fullList)) > 0): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Картинка</th>
                    <th scope="col">Название</th>
                    <th scope="col">Место проведения</th>
                    <th scope="col">Рецептура</th>
                    <th scope="col">Стоимость</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($fullList as $item): ?>
                    <tr>
                        <th scope="row"><img src="catalog_img/<?=htmlspecialchars($item['image'])?>" style="max-width: 150px;" alt="<?=$item['image']?>" </th>
                        <td><?=htmlspecialchars($item['name'])?></td>
                        <td><?=htmlspecialchars($item['outlet'])?></td>
                        <td><?=htmlspecialchars($item['receipture'])?></td>
                        <td><?=htmlspecialchars($item['price'])?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        <?php endif;?>
    </div>

</div>

</nav>
</body>
</html>