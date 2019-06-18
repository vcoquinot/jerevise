
<?php
$str="édiréé";
echo $str."";

skip_accents($str,$charset='utf-8');

echo "sans accent : ".$str."";





 
function skip_accents( $str, $charset='utf-8' ) {
 
    $str = htmlentities( $str, ENT_NOQUOTES, $charset );
    
    $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
    $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
    $str = preg_replace( '#&[^;]+;#', '', $str );
    
    return $str;
}

/*$str2= strtr($str,utf8_decode(
   "ÀÁÂÃÄÅÒÓÔÕÖØÈÉÊËÇÌÍÎÏÙÚÛÜÑ",
   "AAAAAAOOOOOOEEEECIIIIUUUUN"));


/*htmlentities($str, ENT_NOQUOTES, $encoding);
        $str2 = preg_replace('#&([A-za-z])(?:acute|grave|cedil|circ|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str2 = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str);
        $str2 = preg_replace('#&[^;]+;#', '', $str);
        echo "sans accent : ".$str2;*/
    



function url_conv($str) {
$str = lcfirst($str);
$chaine_a_trouver = array('á', 'à', 'â', 'ä', 'ã', 'å', 'ç', 'é', 'è', 'ê', 'ë', 'í', 'ì', 'î', 'ï', 'ñ', 'ó', 'ò', 'ô', 'ö', 'õ', 'ú', 'ù', 'û', 'ü', 'ý', 'ÿ', "'", '"', '\'', '&quot;', '&gt;', '&lt;', '»', '«', ' ');
$chaine_a_remplacer = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i' ,'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', '-', '-', '-', '', '', '', '-', '-', '-');
 
for($i = 0; $i < count($chaine_a_trouver); $i++){
    $str = preg_replace('#' . $chaine_a_trouver[$i] . '#isU', $chaine_a_remplacer[$i], $str);
}
$str = preg_replace("#[^a-zA-Z0-9\-]#", "", $str);//on vire tout ce qui n'est pas des lettres/chiffres, ou tirets->caractère qui ne serait pas dans la chaîne a remplacer
$str = preg_replace("#-+#", "-", $str);//supprimer les éventuels doublons : 5 ------------- ça fait moche
return $str;
}
/*
$modele = "/[à, á, â, ã, ä, å, æ, ç, è, é, ê, ë, ì, í, î,
        ï, ð, ñ, ò, ó, ô, õ, ö, ø, ù, ú, û, ü, ý, ý, þ, ÿ]/"
  function no_accent($my_string)
    {
        // tableau accents
        $pattern_accent = new Array(/À/g, /Á/g, /Â/g, /Ã/g, /Ä/g, /Å/g, /Æ/g, /Ç/g, /È/g, /É/g, /Ê/g, /Ë/g,
        /Ì/g, /Í/g, /Î/g, /Ï/g, /Ð/g, /Ñ/g, /Ò/g, /Ó/g, /Ô/g, /Õ/g, /Ö/g, /Ø/g, /Ù/g, /Ú/g, /Û/g, /Ü/g, /Ý/g,
        /Þ/g, /ß/g, /à/g, /á/g, /â/g, /ã/g, /ä/g, /å/g, /æ/g, /ç/g, /è/g, /é/g, /ê/g, /ë/g, /ì/g, /í/g, /î/g,
        /ï/g, /ð/g, /ñ/g, /ò/g, /ó/g, /ô/g, /õ/g, /ö/g, /ø/g, /ù/g, /ú/g, /û/g, /ü/g, /ý/g, /ý/g, /þ/g, /ÿ/g);
         
        // tableau sans accents
        $pattern_replace_accent = new Array("A","A","A","A","A","A","A","C","E","E","E","E",
        "I","I","I","I","D","N","O","O","O","O","O","O","U","U","U","U","Y",
        "b","s","a","a","a","a","a","a","a","c","e","e","e","e","i","i","i",
        "i","d","n","o","o","o","o","o","o","u","u","u","u","y","y","b","y");
         
        //pour chaque caractere si accentué le remplacer par un non accentué
        for(var i=0;i<pattern_accent.length;i++)
        {
            my_string = my_string.replace(pattern_accent[i],pattern_replace_accent[i]);
        }
        return my_string;
    } */  
?>
