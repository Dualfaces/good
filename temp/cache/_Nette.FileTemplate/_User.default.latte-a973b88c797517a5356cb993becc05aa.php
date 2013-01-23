<?php //netteCache[01]000409a:2:{s:4:"time";s:21:"0.42350100 1358952912";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:87:"/Applications/XAMPP/xamppfiles/htdocs/good/app/AdminModule/templates/User/default.latte";i:2;i:1358952909;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/good/app/AdminModule/templates/User/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'luzam3anxm')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb645132d447_content')) { function _lb645132d447_content($_l, $_args) { extract($_args)
?>	<table class="table-hover">
		<tr><th>Uživatelské jméno</th><th>Práva</th><th>Celé jméno</th><th></th></tr>
<?php $iterations = 0; foreach ($users as $user): $id = $user->id ?>
			<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($user->username, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($user->rights, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($user->first_name, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($user->last_name, ENT_NOQUOTES) ?>
</td><td><a href="<?php echo htmlSpecialChars($_control->link("User:edit", array($id))) ?>
">Upravit</a></td></tr>
<?php $iterations++; endforeach ?>
	</table>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 