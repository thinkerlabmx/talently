<?php

namespace App;

class VillaPeruana
{
    public $name;

    public $quality;

    public $sellIn;

    public $qualityFactor;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn) {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        //Definimos el factor de ajuste de calidad
        $this->qualityFactor=1;
        if($this->name == 'Café Altocusco') $this->qualityFactor=-2;
        if($this->name == 'normal') $this->qualityFactor=-1;

        //Solo se modifican los atributos de los productos que NO son Tumi
        if ($this->name != 'Tumi de Oro Moche')
        {
            if($this->quality>0 && $this->quality<50)
            {
                //La calidad siempre se moverá al menos una vez en función del producto
                $this->quality+=$this->qualityFactor;
                //Lo tickets VIP tienen un comportamiento distinto al resto de los productos
                if($this->name == 'Ticket VIP al concierto de Pick Floid')
                {
                    if($this->sellIn>0)
                    {
                        if($this->sellIn<=10)
                            $this->quality+=$this->qualityFactor;
                        if($this->sellIn<=5)
                            $this->quality+=$this->qualityFactor;
                    }
                    else {
                        $this->quality=0;
                    }
                }
                //El resto de los productos se comportan igual
                else
                {
                    if($this->sellIn<=0)
                        $this->quality+=$this->qualityFactor;
                }

                if($this->quality>50)
                    $this->quality=50;
            }
            $this->sellIn -=  1;
        }
    }
}
