<?php

namespace App\Application\UserCases;

use App\Domain\ShortLink;
use App\Application\Repositories\IShortLinkRepository;


class CreateShortLink 
{
    private IShortLinkRepository $repository;

    public function __construct(IShortLinkRepository $repository){
        $this->repository = $repository;
    }

    public function execute(string $link): ShortLink
    {
        $shortlink = new ShortLink($link);

        $this->repository->save($shortlink);

        return $shortlink;
    }
}

?>