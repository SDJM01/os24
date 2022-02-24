<?php
require_once "textLogic.php";

//include 'header.php'
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <form name="doText" method="post">
                <div class="mb-3">
                    <textarea name="text" rows="10" cols="45"><?php echo $text ; ""?></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="doText">Отправить</button>
            </form>

        </div>
    </div>
    <div> <p>Задание 1</p>
        <?php echo textTask1(@$_POST["text"]) ?>
    </div>
    <div> <p>Задание 7</p>
        <?php echo textTask7(@$_POST["text"]) ?>
    </div>
    <div> <p>Задание 11</p>
        <?php echo textTask11(@$_POST["text"]) ?>
    </div>
    <div> <p>Задание 16</p>
        <?php echo textTask16(@$_POST["text"]) ?>
    </div>
</div>
<?//php include 'footer.php' ?>