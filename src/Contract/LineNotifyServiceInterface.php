<?php
declare(strict_types=1);

namespace GiocoPlus\LineNotify\Contract;

interface LineNotifyServiceInterface {
    function send(string $level, string $group, string $message) :array;
}