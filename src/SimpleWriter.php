<?php

namespace Logger;

class SimpleFormatter implements FormatterInterface
{
    private $format;

    public function __construct(string $format = '[{date}] [{level}] {message} {context}')
    {
        $this->format = $format;
    }

    public function format(string $level, string $message, array $context = []): string
    {
        $replacements = [
            '{date}' => date('Y-m-d H:i:s'),
            '{level}' => $level,
            '{message}' => $message,
            '{context}' => json_encode($context),
        ];

        return strtr($this->format, $replacements);
    }
}
