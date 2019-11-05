clase  ElPadre
{
    public function metodoDelPadre()
    {
        echo "Estoy en el metodo PADRE";
    }
}

clase ElHijo extends ElPadre{

    public function metodoDelPadre()
    {
        echo "Desde el Hijo";
    }
}

$objeto = new  ElHijo();
objeto->metodoDelPadre();