<?php /* Smarty version 3.1.24, created on 2015-06-15 15:06:50
         compiled from "admin/design/html/article_categories.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30895557e5d6ae377b0_77775740%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f1e379f21d71c33db07272dcbdbde8758a77c8f' => 
    array (
      0 => 'admin/design/html/article_categories.tpl',
      1 => 1433764596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30895557e5d6ae377b0_77775740',
  'variables' => 
  array (
    'articlecat' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_557e5d6af0e560_93317080',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557e5d6af0e560_93317080')) {
function content_557e5d6af0e560_93317080 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30895557e5d6ae377b0_77775740';
?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_Variable('Категории материалов', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="capture_head">
    <div id="header">
        <h1>Категории материалов</h1>
    </div>

	<a class="add" href="index.php?module=ArticleCategoryAdmin&method=add_cat">+ Добавить категорию</a>
</div>

<?php if ($_smarty_tpl->tpl_vars['articlecat']->value) {?>
	<form id="form_list" method="post">
	    <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
">
	
		<div id="list">
			<div class="list_top">
				<div class="checkbox"></div>
				<div class="name">Название</div>
				<div class="id">id</div>
			</div>
			
			<?php
$_from = $_smarty_tpl->tpl_vars['articlecat']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
			<div class="row">
				<div class="checkbox cell">
					<input type="checkbox" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
" />				
				</div>
				<div class="name cell"><a href="index.php?module=ArticleCategoryAdmin&method=add_cat&id=<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a></div>
				<div class="id cell"><?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
</div>
				<div class="icons cell">
					<a class="delete" title="Удалить" href="#"></a>
				</div>			
			</div>
			<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
		</div>
	
		<div id="action">
            <label id="check_all" class="dash_link">Выбрать все</label>

            <span id="select">
            <select name="action">
                <option value="delete">Удалить</option>
            </select>
            </span>

            <input id="apply_action" class="button_green" type="submit" value="Применить">
		</div>
	</form>
<?php }?>



<?php echo '<script'; ?>
>
$(function() {
	// Выделить все
	$("#check_all").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', $('#list input[type="checkbox"][name*="check"]:not(:checked)').length>0);
	});	
	
	// Удалить 
	$("a.del").click(function() {
		$('#list input[type="checkbox"][name*="check"]').attr('checked', false);
		$(this).closest("div.row").find('input[type="checkbox"][name*="check"]').attr('checked', true);
		$(this).closest("form").find('select[name="action"] option[value=delete]').attr('selected', true);
		$(this).closest("form").submit();
	});
	
	// Подтверждение удаления
	$("form").submit(function() {
		if($('select[name="action"]').val()=='delete' && !confirm('Подтвердите удаление'))
			return false;	
	});
});

<?php echo '</script'; ?>
>
<?php }
}
?>