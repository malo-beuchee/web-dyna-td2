<?php
function div($message){
    return '<span>'.$message.'</span>';
}
function element($titre, $contenu, $niveau=1){
  return "<h$niveau>$titre</h$niveau>
          <div>$contenu</div>";
}
function parseElements($elements){
  $resp='';
  foreach ($elements as $elm) {
    $resp.=element($elm['titre'],$elm['contenu'],$elm['niveau']??1);
  }
  return $resp;
}
function createHtmlTable($nbLignes,$nbColonnes){
  ?>
  <table border='1'>
      <tbody>
        <?php for($i=0;$i<$nbLignes;$i++){
          $gras=($i%2==0)?"bold":"normal";
        ?>
          <tr>
          <?php for($j=0;$j<$nbColonnes;$j++){
              $couleur=($j%2==0)?"red":"black";
              ?>
              <td style="font-weight: <?=$gras ?>;color:<?=$couleur ?>"><?="$i - $j"?></td>
          <?php }?>
          </tr>
        <?php }?>
      </tbody>
  </table>
  <?php
}
 ?>
