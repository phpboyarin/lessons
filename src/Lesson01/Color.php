<?php

declare(strict_types=1);

namespace PHPBoyarin\Lessons\Lesson01;

class Color
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var string
     */
    private string $rgb;

    /**
     * @param string $name
     * @param string $rgb
     */
    public function __construct(string $name, string $rgb)
    {
        $this->name = $name;
        $this->setRgb($rgb);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRgb(): string
    {
        return $this->rgb;
    }

    /**
     * @param string $rgb
     *
     * @return void
     */
    private function setRgb(string $rgb)
    {
        if (preg_match('~^#[a-fA-F0-9]{6}$~s', $rgb)) {
            $this->rgb = strtoupper($rgb);
        } else {
            throw new \InvalidArgumentException('RGB string must be in this format: #AABBCC');
        }
    }
}
