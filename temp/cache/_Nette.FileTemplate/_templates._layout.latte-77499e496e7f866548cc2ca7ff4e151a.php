<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.06905300 1358438646";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"/Applications/XAMPP/xamppfiles/htdocs/good/app/AdminModule/templates/@layout.latte";i:2;i:1358438635;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/good/app/AdminModule/templates/@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2pn6lof8pk')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb5922152d59_title')) { function _lb5922152d59_title($_l, $_args) { extract($_args)
?>Login :: <?php Nette\Latte\Macros\UIMacros::callBlockParent($_l, 'title', get_defined_vars()) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6ba627dd0b_content')) { function _lb6ba627dd0b_content($_l, $_args) { extract($_args)
;$iterations = 0; foreach ($flashes as $flash): ?>
		<div class="<?php echo htmlSpecialChars($flash->type) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
	<div id="loginForm">
<?php $_ctrl = $_control->getComponent("loginForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
	</div>
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
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<?php if ($user->isLoggedIn()): ?>
	<a href="<?php echo htmlSpecialChars($_control->link("logout!")) ?>">Odhlásit</a>
	<a href="<?php echo htmlSpecialChars($_control->link("createUser!")) ?>">Nový uživatel</a>
<?php endif ;call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 