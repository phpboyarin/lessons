<?php

declare(strict_types=1);

namespace PHPBoyarin\Lessons\Lesson01;

class HobotSorter
{
    /**
     * @var array
     */
    private array $hobots = [];

    /**
     * @var bool
     */
    private bool $isSortedFlag = false;

    /**
     * @param Hobot $hobot
     *
     * @return void
     */
    public function addHobot(Hobot $hobot)
    {
        $this->hobots[] = $hobot;
        $this->isSortedFlag = false;
    }

    /**
     * @return array
     */
    public function getHobots(): array
    {
        return $this->hobots;
    }

    /**
     * @return bool
     */
    public function isSorted(): bool
    {
        return $this->isSortedFlag;
    }

    /**
     * Здесь содержится максимум сахара: анонимная функция и космический
     * корабль. Не беспокойтесь, скачков инсулина этот сахар не вызывает.
     *
     * @return void
     */
    public function sort(): void
    {
        usort($this->hobots, function (Hobot $one, Hobot $two) {
            return $one->getLength() <=> $two->getLength();
        });
        $this->isSortedFlag = true;
    }

    /**
     * На самом деле, в этом методе все равно присутствует синтаксический
     * сахар в виде анонимной функции.
     *
     * @return void
     */
    public function sortWithoutSpaceship(): void
    {
        usort($this->hobots, function (Hobot $one, Hobot $two) {
            if ($one->getLength() === $two->getLength()) {
                return 0;
            } elseif ($one->getLength() > $two->getLength()) {
                return 1;
            } else {
                return -1;
            }
        });
        $this->isSortedFlag = true;
    }

    /**
     * В этой функции не используется синтаксический сахар в виде
     * анонимной функции. Все по-честному: второй аргумент ссылается
     * на настоящий метод объекта.
     *
     * @return void
     */
    public function sortWithoutSugarAtAll(): void
    {
        usort($this->hobots, [$this, 'sortByLength']);
        $this->isSortedFlag = true;

    }

    /**
     * @param Hobot $one
     * @param Hobot $two
     *
     * @return int
     */
    private function sortByLength(Hobot $one, Hobot $two): int
    {
        if ($one->getLength() === $two->getLength()) {
            return 0;
        } elseif ($one->getLength() > $two->getLength()) {
            return 1;
        } else {
            return -1;
        }
    }
}
