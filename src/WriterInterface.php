<?php

namespace Logger;

interface WriterInterface
{
    public function write(string $message): void;
}
