<?php
/**
* Tab picross
*/
class picross
{

  function __construct(int $nlines,int $ncolumns,int $ncolors)
  {
    $lines = array('taille' => $nlines );
    $columns = array('taille' => $ncolumns );
    $couleurs = array('taille' => $ncolors );
    return array('lines' => $lines,'columns' => $columns,'colors' => $colors );
  }

  function addColor(color $color){
    array_push($this['colors']);
  }

  function addLine(array $line){
    array_push($this['lines'],$line);
  }

  function addCol(array $col){
    array_push($this['columns'],$col);
  }

  function echoFormRadio(){
    echo "<input type=\"radio\" id=\"coul0\" name=\"radio-group\" checked value=\"#000\">
    <label for=\"coul0\"></label>";
    for ($i=0; $i < $this['colors']['taille']; $i++) {
      echo "<input type=\"radio\" id=\"coul$i\" name=\"radio-group\" checked value=\"".$this['colors'][$i]."\">
      <label for=\"coul$i\"></label>";
    }
  }

  function loadFile($filename){
    $filepath = "/assets/picross/".$filename.".pic";
    $file = fopen($filepath,'r');
    $nlines = atoi(fread($file,3));
    $ncolumns = atoi(fread($file,3));
    $ncolors = atoi(fread($file,1));
    for ($i=0; $i < $ncolors; $i++) {
      addColor(fread($file,6));
    }
    for ($i=0; $i < $nlines; $i++) {
      addLine(explode(',',fread($file,$ncolors*3-1)));
    }
    for ($i=0; $i < $ncolumns; $i++) {
      addColumn(explode(',',fread($file,$ncolors*3-1)));
    }
  }

  function echoPicLine(int $line){
    echo "<tr>";
    for ($i=0; $i < $this['colors']['taille']; $i++) {
      echo "<th id=\"l".$i."\" class=\"ligne coul".$i."\">";
      echo $this['line'][$line][$i];
      echo "</th>";
    }
    for ($i=0; $i < $this['columns']['taille']; $i++) {
      echo "<td id=\"${line}a$i\" onclick=\"pic($line,$i);col($i);lig($line);>";
      echo "</td>";
    }
    echo "</tr>";
  }

  function echoPicCol(){
    for ($i=0; $i < $this['colors']['taille']; $i++) {
      echo "<tr>";
      for ($j=0; $j <$this['columns']['taille']; $j++) {
        echo "<th id=\"c".$j."\" class=\"col coul".$j."\">";
        echo $this['columns'][$j][$i];
        echo "</th>"
      }
      echo "</tr>";
    }
  }

}

?>
