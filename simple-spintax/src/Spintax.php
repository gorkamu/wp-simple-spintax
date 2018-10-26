<?php

class Spintax {

    /**
     * Method used for spintax string processing
     * @param $text
     * @return mixed
     */
    public function process($text)
    {
        return preg_replace_callback(
            '/\{(((?>[^\{\}]+)|(?R))*)\}/x',
            [$this, 'replace'],
            $text
        );
    }

    /**
     * Helper method for replacing spintax part with result string
     * @param $text
     * @return mixed
     */
    public function replace($text)
    {
        $text = $this->process($text[1]);
        $parts = explode('|', $text);
        return $parts[array_rand($parts)];
    }
}