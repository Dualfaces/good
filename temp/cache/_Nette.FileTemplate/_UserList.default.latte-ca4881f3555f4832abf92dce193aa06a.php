<?php //netteCache[01]000413a:2:{s:4:"time";s:21:"0.50163800 1358853396";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:91:"/Applications/XAMPP/xamppfiles/htdocs/good/app/FrontModule/templates/UserList/default.latte";i:2;i:1358853393;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/good/app/FrontModule/templates/UserList/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd04j8nqo1r')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb362eb7bf48_title')) { function _lb362eb7bf48_title($_l, $_args) { extract($_args)
?>	<?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?>

<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0b45f28fe2_content')) { function _lb0b45f28fe2_content($_l, $_args) { extract($_args)
?><h1><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></h1>
<table>
	<tr><th>Uživatelské jméno</th><th>Práva</th><th>Celé jméno</th><th>E-mail</th><th>O mě</th></tr>
<?php $iterations = 0; foreach ($users as $user): ?>
	<tr><td><?php echo Nette\Templating\Helpers::escapeHtml($user->username, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($user->rights, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($user->first_name, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($user->last_name, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($user->email, ENT_NOQUOTES) ?>
</td><td><?php echo Nette\Templating\Helpers::escapeHtml($user->about, ENT_NOQUOTES) ?></td></tr>
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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ; call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 