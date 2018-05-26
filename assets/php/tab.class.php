<?php
/**
* Tab picross
*/
class picross
{
  public $tailles;
  public $lines;
  public $columns;
  public $colors;


  function __construct(int $nlines=0,int $ncolumns=0,int $ncolors=0)
  {
    $this->$tailles['lines'] =  $nlines ;
    var_dump($this->$tailles);
    $this->$tailles['columns'] = $ncolumns ;
    $this->$tailles['colors'] = $ncolors ;
  }

  private function addColor($color){
    echo "add";
    var_dump($this);
    $this['colors'][]=$color;
  }

  private function addLine(array $line){
    array_push($this['lines'],$line);
  }

  private function addCol(array $col){
    array_push($this['columns'],$col);
  }

  private function echoFormRadio(){
    echo "<input type=\"radio\" id=\"coul0\" name=\"radio-group\" checked value=\"#000\">
    <label for=\"coul0\"></label>";
    for ($i=0; $i < $this['colors']['taille']; $i++) {
      echo "<input type=\"radio\" id=\"coul$i\" name=\"radio-group\" checked value=\"".$this['colors'][$i]."\">
      <label for=\"coul$i\"></label>";
    }
  }

  public function loadFile($filename){
    $filepath = "../assets/picross/".$filename.".pic";

    $file = fopen($filepath,'r');
    if ($file==false) {
      die("erreur fichier".$filepath);
    }
    $nlines = fgets($file);
    $ncolumns = fgets($file);
    $ncolors = fgets($file);
    echo $nlines.$ncolumns.$ncolors;
    for ($i=0; $i < $ncolors; $i++) {
      $coul=fgets($file);
      echo $coul;
      $this->addColor($coul);
    }
    for ($i=0; $i < $nlines; $i++) {
      $this->addLine(explode(',',fgets($file)));
    }
    for ($i=0; $i < $ncolumns; $i++) {
      $this->addColumn(explode(',',fgets($file)));
    }
    fclose($file);
  }

  private function echoPicLine(int $line){
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

  private function echoPicCol(){
    for ($i=0; $i < $this['colors']['taille']; $i++) {
      echo "<tr>";
      for ($j=0; $j <$this['columns']['taille']; $j++) {
        echo "<th id=\"c".$j."\" class=\"col coul".$j."\">";
        echo $this['columns'][$j][$i];
        echo "</th>";
      }
      echo "</tr>";
    }
  }

  public function echoPicross(){
    $this->echoPicCol();
    for ($i=0; $i < $this['lines']['taille']; $i++) {
      $this->echoPicLine($i);
    }
  }

}

?>
