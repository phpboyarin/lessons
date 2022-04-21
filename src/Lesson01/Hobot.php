<?php

declare(strict_types=1);

namespace PHPBoyarin\Lessons\Lesson01;

class Hobot
{
    /**
     * @var int
     */
    private int $length;

    /**
     * @var Color
     */
    private Color $color;

    /**
     * @param int $length
     * @param Color $color
     */
    public function __construct(int $length, Color $color)
    {
        $this->length = $length;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @return Color
     */
    public function getColor(): Color
    {
        return $this->color;
    }
}
