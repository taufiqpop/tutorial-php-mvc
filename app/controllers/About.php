<?php

class About
{
    public function index($nama = 'Pop', $pekerjaan = 'Dev')
    {
        echo "Halo Nama Saya $nama, Saya Adalah Seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
