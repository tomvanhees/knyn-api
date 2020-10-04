<?php


namespace App\Contracts;


interface HasMediaContract
{
    function setMedia(): void;

    function getMediaItems(): array;

    function getMediaResource();

}
