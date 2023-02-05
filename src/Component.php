<?php

namespace Developh\OpenAI;

use Developh\OpenAI\Components\Completion;
use JsonException;

class Component
{
    private Completion $completion;

    public function __construct()
    {
        $this->completion = new Completion();
    }

    public function model(string $model): Component
    {
        $this->completion->model($model);

        return $this;
    }

    public function temperature(float $temperature): Component
    {
        $this->completion->temperature($temperature);

        return $this;
    }

    public function length(string $length): Component
    {
        $this->completion->length($length);

        return $this;
    }

    /**
     * @throws JsonException
     */
    public function textCompletion(string $prompt, int $maxTokens = 100): object|array
    {
        return $this->completion->text($prompt, $maxTokens);
    }

}
