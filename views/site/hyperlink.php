<?php 
use \yii\helpers\Url;
use yii\helpers\Html;

?>

<a href="<?= Url::to(['country/index']) ?>">Data Country</a>
<br>

<?php 
echo Html::a('Example','http://www.example.com');
echo "<br>";
echo Html::a('Home ',['site/index']);

?>