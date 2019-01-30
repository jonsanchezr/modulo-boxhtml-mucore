<?
/*
* @+================================================================+
* @¦ Modulo Box HTML/Javascript MUCore v1.0.8                       ¦
* @¦ Credits: Thejonyx - https://www.facebook.com/RoboticGames      ¦
* @¦ Credits: Thejonyx - https://jonsanchezr.github.io/cv/          ¦
* @+================================================================+
*/
if (isset($_POST['settings'])) {
    $new_db = fopen("../engine/boxhtml_config.php", "w");
    $data   = "<?\r\n";
    $data .= "\$n_borders = \"" . $_POST['n_borders'] . "\";\r\n";
	$data .= "\$n_content = \"" . $_POST['n_content'] . "\";\r\n";
    $data .= "?>";
    fwrite($new_db, $data);
    fclose($new_db);
    echo notice_message_admin('Settings successfully saved', 1, 0, 'index.php?get=boxhtml_manager');
    
} else {
    require('../engine/boxhtml_config.php');
    echo '
    <form action="" name="form_edit" method="POST">
    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_panel">
<tr>
 <td align="center" class="panel_title" colspan="2">Caja HTML/Javascript</td>
</tr>

	<tr>
    <td align="left" class="panel_title_sub" colspan="2">Colocarle Borde a la caja</td>
    </tr>
    <tr>
    <td align="left" class="panel_text_alt1" width="50%">Cuando este en -SI- la caja HTML/Javascript mostrar un borde negro.</td>
    <td align="left" class="panel_text_alt2" width="50%">
	<label><input type="radio" name="n_borders" value="1">SI</label> 
	<label><input type="radio" name="n_borders" value="0" checked="checked">NO</label></td
    </tr>
	
	<tr>
    <td align="left" class="panel_title_sub" colspan="2">Contenido de la caja</td>
    </tr>
    <tr>
    <td  class="panel_text_area" colspan="2" width="60%"><textarea id="n_content" name="n_content" rows="10" style="width: 100%;">'.$n_content.'</textarea></td>
    </tr>

<tr>
<td align="right" class="panel_buttons" colspan="2">
<input type="hidden" name="settings">
<input type="submit" value="Save"></td>
</tr>
</table>';
}
/*
* @+================================================================+
* @¦ Modulo Box HTML/Javascript MUCore v1.0.8                       ¦
* @¦ Credits: Thejonyx - https://www.facebook.com/RoboticGames      ¦
* @¦ Credits: Thejonyx - https://jonsanchezr.github.io/cv/          ¦
* @+================================================================+
*/
?> 