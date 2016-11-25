<?php

class Zupanija extends Eloquent
{
    protected $table    = 'zupanija';
    protected $primaryKey= 'sifZupanija';
    public    $fillable = ['sifZupanija','nazZupanija'];
}