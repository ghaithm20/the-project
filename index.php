<?php
class car{
    public $x=0;
    public $y=0;
public function move($g) {
if($g=="R"){
    $this->x++;

}
else if($g=="L"){
    $this->x-=1;

}
else if($g=="U"){
    $this->y++;

}
else if($g=="D"){
   $this-> y--;
}
}
}


if (isset($_GET["d1"])){
    $d1=$_GET["d1"];
    $b=new car();

    for($i=0; $i<strlen($d1); $i++){
        $b->move($d1[$i]);
    }
    echo $b->x." ".$b->y;
}
