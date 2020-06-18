<?php

declare(strict_types=1);

class MessageBag
{
    public const ERROR = 'error';
    public const SUCCESS = 'success';
    public const INFO = 'info';

    public static function addMessage(string $message, string $type = self::ERROR): void
    {
        $_SESSION['messages'][] = [
            'type' => $type,
            'message' => $message,
        ];
    }

    public static function getMessages(): array
    {
        $messages = (array) $_SESSION['messages'];
        unset($_SESSION['messages']);

        return $messages;
    }

    public static function hasMessages(): bool
    {
        if (!isset($_SESSION['messages'])) {
            return false;
        }

        return (bool) \count($_SESSION['messages']);
    }
}
