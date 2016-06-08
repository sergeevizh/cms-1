<?php /* Smarty version 3.1.24, created on 2015-07-14 05:04:46
         compiled from "admin/design/html/templates.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2323455a40bce008920_15136212%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff16c716e6494aa6e8c5a1bdebf8652980c7a8f0' => 
    array (
      0 => 'admin/design/html/templates.tpl',
      1 => 1436814210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2323455a40bce008920_15136212',
  'variables' => 
  array (
    'template_file' => 0,
    'theme' => 0,
    'message_error' => 0,
    'templates' => 0,
    't' => 0,
    'template_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55a40bce052cb3_05187493',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a40bce052cb3_05187493')) {
function content_55a40bce052cb3_05187493 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2323455a40bce008920_15136212';
if ($_smarty_tpl->tpl_vars['template_file']->value) {?>
	<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_Variable("Шаблон ".((string)$_smarty_tpl->tpl_vars['template_file']->value), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>
<?php }?>


<link rel="stylesheet" href="design/js/codemirror/lib/codemirror.css">
<?php echo '<script'; ?>
 src="design/js/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="design/js/codemirror/mode/smarty/smarty.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/smartymixed/smartymixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/xml/xml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/htmlmixed/htmlmixed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="design/js/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="design/js/codemirror/addon/selection/active-line.js"><?php echo '</script'; ?>
>
 

<style type="text/css">

.CodeMirror{
	font-family:'Courier New';
	margin-bottom:10px;
	border:1px solid #c0c0c0;
	background-color: #ffffff;
	height: auto;
	min-height: 300px;
	width:100%;
}
.CodeMirror-scroll
{
	overflow-y: hidden;
	overflow-x: auto;
}
.cm-s-default .cm-smarty.cm-tag{color: #ff008a;}
.cm-s-default .cm-smarty.cm-string {color: #007000;}
.cm-s-default .cm-smarty.cm-variable {color: #ff008a;}
.cm-s-default .cm-smarty.cm-variable-2 {color: #ff008a;}
.cm-s-default .cm-smarty.cm-variable-3 {color: #ff008a;}
.cm-s-default .cm-smarty.cm-property {color: #ff008a;}
.cm-s-default .cm-comment {color: #505050;}
.cm-s-default .cm-smarty.cm-attribute {color: #ff20Fa;}
</style>

<?php echo '<script'; ?>
>
$(function() {	
	// Сохранение кода аяксом
	function save()
	{
		$('.CodeMirror').css('background-color','#e0ffe0');
		content = editor.getValue();
		
		$.ajax({
			type: 'POST',
			url: 'ajax/save_template.php',
			data: {'content': content, 'theme':'<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
', 'template': '<?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
', 'session_id': '<?php echo $_SESSION['id'];?>
'},
			success: function(data){
			
				$('.CodeMirror').animate({'background-color': '#ffffff'});
			},
			dataType: 'json'
		});
	}

	// Нажали кнопку Сохранить
	$('input[name="save"]').click(function() {
		save();
	});
	
	// Обработка ctrl+s
	var isCtrl = false;
	var isCmd = false;
	$(document).keyup(function (e) {
		if(e.which == 17) isCtrl=false;
		if(e.which == 91) isCmd=false;
	}).keydown(function (e) {
		if(e.which == 17) isCtrl=true;
		if(e.which == 91) isCmd=true;
		if(e.which == 83 && (isCtrl || isCmd)) {
			save();
			e.preventDefault();
		}
	});
});
<?php echo '</script'; ?>
>


<div class="capture_head">
	<div id="header">
		<h1>Тема <?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
, шаблон <?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>
</h1>
	</div>
	
	<a href="index.php?module=ThemeAdmin">← Темы</a>	
	<a href="index.php?module=StylesAdmin">CSS шаблона</a>		
	<a href="index.php?module=ImagesAdmin">Изображения шаблона</a>	
</div>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
<div class="message_box message_error">
	<span class="text">
	<?php if ($_smarty_tpl->tpl_vars['message_error']->value == 'permissions') {?>Установите права на запись для файла <?php echo $_smarty_tpl->tpl_vars['template_file']->value;?>

	<?php } elseif ($_smarty_tpl->tpl_vars['message_error']->value == 'theme_locked') {?>Текущая тема защищена от изменений. Создайте копию темы.
	<?php } else {
echo $_smarty_tpl->tpl_vars['message_error']->value;
}?>
	</span>
</div>
<?php }?>

<!-- Список файлов для выбора -->
<div class="board_head">
	<div class="templates_names">
		<?php
$_from = $_smarty_tpl->tpl_vars['templates']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['t'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['t']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
$foreach_t_Sav = $_smarty_tpl->tpl_vars['t'];
?>
			<a <?php if ($_smarty_tpl->tpl_vars['template_file']->value == $_smarty_tpl->tpl_vars['t']->value) {?>class="selected"<?php }?> href='index.php?module=TemplatesAdmin&file=<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['t']->value;?>
</a>
		<?php
$_smarty_tpl->tpl_vars['t'] = $foreach_t_Sav;
}
?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['template_file']->value) {?>
<div class="block">
    <form>
        <textarea id="template_content" name="template_content" style="width:700px;height:500px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
    </form>


</div>

<div id="action">
    <input class="button_green button_save" type="button" name="save" value="Сохранить" />
</div>



<?php echo '<script'; ?>
>
var editor = CodeMirror.fromTextArea(document.getElementById("template_content"), {
		mode: "smartymixed",		
		lineNumbers: true,
		styleActiveLine: true,
		matchBrackets: false,
		enterMode: 'keep',
		indentWithTabs: false,
		indentUnit: 1,
		tabMode: 'classic',
		pretty_break: true
	});
<?php echo '</script'; ?>
>


<?php }
}
}
?>