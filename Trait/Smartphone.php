<?php

class Phone
{
    public function calling()
    {
        echo 'ring ring ring';
    }
    public function sms()
    {
        echo 'typing typing';
    }
}

trait HasCamera
{
    public function clickPhoto()
    {
        echo 'click';
    }

    public function captureVideo()
    {
        echo 'recording';
    }
}

class Smartphone extends Phone
{
    use HasCamera;
    public function browsing()
    {
        echo 'internet';
    }
}

class SpyPen
{
    use HasCamera;
    public function writing()
    {
        echo 'writing';
    }
}


$amrphone = new Smartphone;
$mayerdoakolom = new SpyPen;

$amrphone->captureVideo();
$mayerdoakolom->captureVideo();

