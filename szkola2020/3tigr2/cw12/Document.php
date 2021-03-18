<?php
abstract class Document{
    public string $name;
    public string $date;
    public function __construct(string $name="noname",string $date="")
    {
        $this->name = $name;
        $this->date = $date==="" ? date("d-m-Y H:i:s") : $date;
    }
    public abstract function info():string;
}