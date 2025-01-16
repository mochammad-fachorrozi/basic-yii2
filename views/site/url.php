<?php
use \yii\helpers\Url;


// URL ke home atau web index
echo Url::home(); echo '<br>';

// URL ke current Controller
echo Url::to(); echo '<br>';

// URL ke current Controller pada Action create
echo Url::to(['create']); echo '<br>';

// URL ke country Controller pada Action index
echo Url::to(['country/index']); echo '<br>';

// URL ke current Controller pada Action index
// dengan parameter nama yang bernilai rozi
echo Url::to(['country/index','nama'=>'rozi']);