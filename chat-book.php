<?
include "config.php";


$azz=$_GET['pagina'];
$inizio=$_GET['pagina']*$entrate; 
$fine=$inizio+$entrate;
$s=sizeof($datafile);
if ($_GET['pagina'] == "") { $i=0; }
if ($_GET['pagina'] != "") { $i=$inizio; }
?>
<HTML><HEAD><TITLE></TITLE>

<body leftMargin=0 topMargin=0 link=<? echo $link; ?> vlink=<? echo $vlink; ?> alink=<? echo $alink; ?> text=<? echo $text; ?> bgcolor=<? echo $bg; ?> >

<TABLE style="BACKGROUND-COLOR: <? echo $bglinknav; ?>; border-collapse:collapse" cellSpacing=0 cellPadding=0 width="100%" border=0>
<TR>
<TD align=middle width="100%" height=30>
<font face="Verdana" size="2">Chat-book <a target="_blank" href="http://www.chattaitaliano.com/">Chattaitaliano</a></font>
</TD></TR></TBODY></TABLE>
<TABLE cellSpacing=1 cellPadding=2 width="100%" border=0>
<TR>
<TD align=middle width="100%">
<table border="0" cellpadding="0" cellspacing="0" width="90%" style="border-collapse: collapse">
<?
while (($i <= $fine) && (explode("|",$datafile[$i]) != null)) { 
$mop = explode("|",$datafile[$i]);
$number = $i;
$newtext = wordwrap($mop[0], 9, "\n", 1);
$newtext1 = wordwrap($mop[1], 15, "\n", 1);
$newtext1 = str_replace("/n","", $newtext1);
$newtext1 = str_replace(":lol:","<img src=smiles/icon_lol.gif  />", $newtext1);
$newtext1 = str_replace(":-?","<img src=smiles/icon_confused.gif />", $newtext1);
$newtext1 = str_replace(":oops:","<img src=smiles/icon_redface.gif />", $newtext1);
$newtext1 = str_replace(":shock:","<img src=smiles/icon_eek.gif />", $newtext1);
$newtext1 = str_replace(":-x","<img src=smiles/icon_mad.gif />", $newtext1);
$newtext1 = str_replace(":roll:","<img src=smiles/icon_rolleyes.gif />", $newtext1);
$newtext1 = str_replace(";-)","<img src=smiles/icon_wink.gif />", $newtext1);
$newtext1 = str_replace(":idea:","<img src=smiles/icon_idea.gif />", $newtext1);
$newtext1 = str_replace(":!:","<img src=smiles/icon_exclaim.gif />", $newtext1);
$newtext1 = str_replace(":-P","<img src=smiles/icon_razz.gif />", $newtext1);
$newtext1 = str_replace(":-D","<img src=smiles/icon_biggrin.gif />", $newtext1);
$newtext1 = str_replace(":-)","<img src=smiles/icon_smile.gif />", $newtext1);
$newtext1 = str_replace(":-/","<img src=smiles/icon_neutral.gif />", $newtext1);
$newtext1 = str_replace(":-(","<img src=smiles/icon_sad.gif />", $newtext1);
$newtext1 = str_replace(":cry:","<img src=smiles/icon_cry.gif />", $newtext1);
$newtext1 = str_replace("8-)","<img src=smiles/icon_cool.gif />", $newtext1);
$newtext1 = str_replace(":-o","<img src=smiles/icon_surprised.gif />", $newtext1);
$newtext1 = str_replace(":?:","<img src=smiles/icon_question.gif />", $newtext1);
$newtext1 = stripslashes($newtext1);

if($number & 1) {
echo "<tr><td width=100% bgcolor=$cel1><b>$newtext </b>-- $newtext1 </td></tr>";
} 
else {
echo "<tr><td width=100% bgcolor=$cel2><b>$newtext </b>-- $newtext1 </td></tr>";
}
$i++;
}
?>
<tr>      <FORM name=post action=form.php method=get>
      <div align="center">
        <center>
      <TABLE class=maintable cellSpacing=0 cellPadding=0 style="border-collapse: collapse"><TBODY>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 style="border-collapse: collapse" border="0">
              <TBODY>
              <TR>
                <TD width="62">Name </TD>
                <TD  width="63">
                <INPUT  
                  onclick="javascript:this.value='';" maxLength=20 size=9 
                  value=YourName name=name></TD>
                <TD  width="1"></TD></TR>
              <TR>
                <TD  width="62">Message: </TD>
                <TD  width="63">
                <input  
                  id=message onkeyup=storeCaret_post(this);
                  onclick=storeCaret_post(this); maxLength=512 
                  onselect=storeCaret_post(this); name=mess size="9"></TD>
                <TD width="1"> 
                </TD></TR></TBODY></TABLE></TD></TR>
        <TR>
          <TD>
            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0 style="border-collapse: collapse">
              <TBODY>
              <TR vAlign=center align=middle>
                <TD><IMG title=" :lol:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':lol:')" height=15 
                  alt=" :lol:" 
                  src="smiles/icon_lol.gif" width=15 
                  border=0></TD>
                <TD><IMG title=" :-?" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-?')" height=15 alt=" :-?" 
                  src="smiles/icon_confused.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :oops:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':oops:')" height=15 
                  alt=" :oops:" 
                  src="smiles/icon_redface.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :shock:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':shock:')" height=15 
                  alt=" :shock:" 
                  src="smiles/icon_eek.gif" width=15 
                  border=0></TD>
                <TD><IMG title=" :-x" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-x')" height=15 alt=" :-x" 
                  src="smiles/icon_mad.gif" width=15 
                  border=0></TD>
                <TD><IMG title=" :roll:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':roll:')" height=15 
                  alt=" :roll:" 
                  src="smiles/icon_rolleyes.gif" 
                  width=15 border=0></TD>
                </TR>
              <TR vAlign=center align=middle>
                <TD><IMG title=" :-P" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-P')" height=15 alt=" :-P" 
                  src="smiles/icon_razz.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :-D" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-D')" height=15 alt=" :-D" 
                  src="smiles/icon_biggrin.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :-)" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-)')" height=15 alt=" :-)" 
                  src="smiles/icon_smile.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :-/" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-/')" height=15 alt=" :-|" 
                  src="smiles/icon_neutral.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :-(" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-(')" height=15 alt=" :-(" 
                  src="smiles/icon_sad.gif" width=15 
                  border=0></TD>
                <TD><IMG title=" :cry:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':cry:')" height=15 
                  alt=" :cry:" 
                  src="smiles/icon_cry.gif" width=15 
                  border=0></TD>
                </TR>
              <TR vAlign=center align=middle>
                <TD><IMG title=" 8-)" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post('8-)')" height=15 alt=" 8-)" 
                  src="smiles/icon_cool.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :-o" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':-o')" height=15 alt=" :-o" 
                  src="smiles/icon_surprised.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :?:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':?:')" height=15 alt=" :?:" 
                  src="smiles/icon_question.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" ;-)" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(';-)')" height=15 alt=" ;-)" 
                  src="smiles/icon_wink.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :idea:" style="CURSOR: pointer" 
                  onclick="javascript:emoticon_post(':idea:')" height=15 
                  alt=" :idea:" 
                  src="smiles/icon_idea.gif" 
                  width=15 border=0></TD>
                <TD><IMG title=" :!:" style="CURSOR: pointer" onclick="javascript:emoticon_post(':!:')" height=15 alt=" :!:" src="smiles/icon_exclaim.gif" 
                  width=15 border=0></TD>
                </TR>
              <TR vAlign=center align=middle>
                
                </TR>
              </TBODY></TABLE>
            <SCRIPT language=JavaScript type=text/javascript>
<!--
function emoticon_post(text) {
        text = ' ' + text + ' ';
        if (document.post.message.createTextRange && document.post.message.caretPos) {
                var caretPos = document.post.message.caretPos;
                caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
                document.post.message.focus();
        } else {
                document.post.message.value  += text;
                document.post.message.focus();
        }
}

function storeCaret_post(textEl) {
        if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
}
//-->
            </SCRIPT></TD></TR></TABLE></center></div>
<INPUT  type=submit value=OK name=submit></FORM></td></tr>
<tr><td width="20%" bgcolor="<? echo $bglinknav; ?>" align="center"><font face="Verdana" size="2">
<?
if (($_GET['pagina'] == "0") && ($s > $entrate)) { echo "     <a href=?pagina=1><img border=0 src=smiles/next.gif width=18 height=15></a>      "; }
if ((($_GET['pagina'] != "") && ($_GET['pagina'] != 0) && ($s > $fine))) { $azz2=$azz-1; $azz++;  echo "     <a href=?pagina=0><img border=0 src=smiles/start.gif width=18 height=15></a>     <a href=?pagina=$azz2><img border=0 src=smiles/prev.gif width=18 height=15></a>      <a href=?pagina=$azz><img border=0 src=smiles/next.gif width=18 height=15></a>     "; }
if ((($_GET['pagina'] != "") && ($_GET['pagina'] != 0) && ($s < $fine))) { $azz2=$azz-1; $azz++;  echo "     <a href=?pagina=0><img border=0 src=smiles/prev.gif width=18 height=15></a>     <a href=?pagina=$azz2><img border=0 src=smiles/prev.gif width=18 height=15></a>         "; }
if (($_GET['pagina'] == "0") && ($s < $entrate)) { echo "  "; }?>
</font></td></tr></table></FORM></TD></TR></TBODY></TABLE><center><font face="Verdana" size="2">Chat-book <a target="_blank" href="http://www.chattaitaliano.com/">Chattaitaliano</a></font>
</center></BODY></HTML>