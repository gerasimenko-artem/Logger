<?php

namespace Logger;

class FileWriter implements WriterInterface
{
    private $filePath;
    private $formatter;

    public function __construct(string $filePath, FormatterInterface $formatter)
    {
        $this->filePath = $filePath;
        $this->formatter = $formatter;
    }

    public function write(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }

    public function setFormatter(FormatterInterface $formatter): void
    {
        $this->formatter = $formatter;
    }

    public function getFormatter(): FormatterInterface
    {
        return $this->formatter;
    }
}
