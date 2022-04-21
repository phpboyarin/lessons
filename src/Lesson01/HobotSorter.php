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
     * @param Hobot $hobot
     *
     * @return void
     */
    public function addHobot(Hobot $hobot)
    {
        $this->hobots[] = $hobot;
    }

    /**
     * @return array
     */
    public function getHobots(): array
    {
        return $this->hobots;
    }

    /**
     * @return void
     */
    public function sort(): void
    {
        usort($this->hobots, function (Hobot $one, Hobot $two) {
            return $one->getLength() <=> $two->getLength();
        });
    }
}
