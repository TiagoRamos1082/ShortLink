<?php

namespace App\Application\Repositories;

use App\Domain\ShortLink;

interface IShortLinkRepository
{
    public function save(ShortLink $shortlink): ShortLink;

    public function deleteById(int $id): void;

    public function put(ShortLink $shortlink): ShortLink;

    public function getById(int $id): ?ShortLink;
}

?>