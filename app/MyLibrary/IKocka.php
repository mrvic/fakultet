<?php
/**
 * Created by PhpStorm.
 * User: SkyLucy
 * Date: 15.11.2016.
 * Time: 22:31
 */
namespace Fakultet\MyLibrary;

interface IKocka
{
    /*
     * Baca kocku i postavlja joj vrijednost trenutni na brojeve 1 .. 6
     */
    public function baci();

    /*
     * @return int na koji je broj kocka okrenuta
     */
    public function getTrenutniBroj();
}