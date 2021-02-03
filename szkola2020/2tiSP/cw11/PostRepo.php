<?php
class PostRepo{
    public static function getAllPosts(string $dir="articles"):array {
        return scandir($dir);
    }
}