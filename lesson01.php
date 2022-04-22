<?php

declare(strict_types=1);

use PHPBoyarin\Lessons\Lesson01\Color;
use PHPBoyarin\Lessons\Lesson01\Hobot;
use PHPBoyarin\Lessons\Lesson01\HobotSorter;

include __DIR__ . '/vendor/autoload.php';

$sorter = new HobotSorter();
$red = new Color('Red', '#FF0000');
$green = new Color('Green', '#00FF00');
$blue = new Color('Blue', '#0000FF');

// для стабильности результата
mt_srand(17);

// помещаем хоботы в сортировщик
$sorter->addHobot(new Hobot(mt_rand(50, 100), $red));
$sorter->addHobot(new Hobot(mt_rand(50, 100), $red));
$sorter->addHobot(new Hobot(mt_rand(50, 100), $red));
$sorter->addHobot(new Hobot(mt_rand(50, 100), $red));

$sorter->addHobot(new Hobot(mt_rand(25, 75), $green));
$sorter->addHobot(new Hobot(mt_rand(25, 75), $green));
$sorter->addHobot(new Hobot(mt_rand(25, 75), $green));
$sorter->addHobot(new Hobot(mt_rand(25, 75), $green));

$sorter->addHobot(new Hobot(mt_rand(0, 50), $blue));
$sorter->addHobot(new Hobot(mt_rand(0, 50), $blue));
$sorter->addHobot(new Hobot(mt_rand(0, 50), $blue));
$sorter->addHobot(new Hobot(mt_rand(0, 50), $blue));

// сортируем хоботы по длине
$sorter->sort();

// выводим результат
foreach ($sorter->getHobots() as $hobot) {
    printf('%d %s%s', $hobot->getLength(), $hobot->getColor()->getName(), PHP_EOL);
}
