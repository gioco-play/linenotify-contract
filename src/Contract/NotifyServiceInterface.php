<?php
declare(strict_types=1);

namespace GiocoPlus\LineNotify\Contract;

interface NotifyServiceInterface {
    function send(string $level, string $group, string $message) :array;
}