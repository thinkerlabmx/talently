<?php

namespace App;



class normalProduct{
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick(){
        if($this->quality>0 && $this->quality<50)
        {
            //La calidad siempre se moverá al menos una vez en función del producto
            $this->quality+=-1;
            if($this->sellIn<=0)
                $this->quality+=-1;
            if($this->quality>50)
                    $this->quality=50;
        }
        $this->sellIn -=  1;
    }
}

class piscoPeruanoProduct {
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick(){
        if($this->quality>0 && $this->quality<50)
        {
            //La calidad siempre se moverá al menos una vez en función del producto
            $this->quality+=1;
            if($this->sellIn<=0)
                $this->quality+=1;
            if($this->quality>50)
                    $this->quality=50;
        }
        $this->sellIn -=  1;
    }
}

class tumiProduct{
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick(){
    }
}

class ticketVipProduct {
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick(){
        if($this->quality>0 && $this->quality<50)
        {
            //La calidad siempre se moverá al menos una vez en función del producto
            $this->quality+=1;
            if($this->sellIn>0)
            {
                if($this->sellIn<=10)
                    $this->quality+=1;
                if($this->sellIn<=5)
                    $this->quality+=1;
            }
            else {
                $this->quality=0;
            }

            if($this->quality>50)
                    $this->quality=50;
        }
        $this->sellIn -=  1;
    }
}

class cafeProduct {
    public $quality;
    public $sellIn;

    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick(){
        if($this->quality>0 && $this->quality<50)
        {
            //La calidad siempre se moverá al menos una vez en función del producto
            $this->quality+=-2;
            if($this->sellIn<=0)
                $this->quality+=-2;
            if($this->quality>50)
                    $this->quality=50;
        }
        $this->sellIn -=  1;
    }
}

class VillaPeruana
{
    public $name;
    public $quality;
    public $sellIn;


    public static function of($name, $quality, $sellIn) 
    {
        switch($name){
            case 'normal':
                return new normalProduct($quality, $sellIn);
            break;
            case 'Pisco Peruano':
                return new piscoPeruanoProduct($quality, $sellIn);
            break;
            case 'Tumi de Oro Moche':
                return new tumiProduct($quality, $sellIn);
            break;
            case 'Ticket VIP al concierto de Pick Floid':
                return new ticketVipProduct($quality, $sellIn);
            break;
            case 'Café Altocusco':
                return new cafeProduct($quality, $sellIn);
            break;
        }
    }
}
