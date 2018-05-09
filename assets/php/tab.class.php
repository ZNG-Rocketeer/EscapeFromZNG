<?php
/**
* Tab picross
*/
class picross
{

  function __construct($nlines,$ncolumns,$ncolors)
  {
    $lines = array('taille' => $nlines );
    $columns = array('taille' => $ncolumns );
    $couleurs = array('taille' => $ncolors );
    return array('lines' => $lines,'columns' => $columns,'colors' => $colors );
  }

  function addColor($color){
    array_push($this['colors']);
  }

  function addLine(array $line){
    $n=count($line);
    for ($i=0; $i < $n; $i++) {
      array_push($this['lines'],$line[$i]);
    }
  }

  function addCol(array $col){
    $n=count($col);
    for ($i=0; $i < $n; $i++) {
      array_push($this['columns'],$col[$i]);
    }
  }

  function loadFile($filename){
    $filepath = "/assets/picross/".$filename.".pic";
    $file = fopen($filepath,'r');
    $nlines = atoi(fread($file,3));
    $ncolumns = atoi(fread($file,3));
  }

}

?>
