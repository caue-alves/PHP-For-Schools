<?php

Interface DbInterface
{
    public function CREATE() : void;
    public function INSERT(string $Labels, string $Values): void;
    public function GetPath() : string;
    public function GetName() : string;
    public function GetPdo() : pdo;
}