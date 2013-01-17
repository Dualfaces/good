<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.66450400 1358422814";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:90:"/Applications/XAMPP/xamppfiles/htdocs/good/app/AdminModule/templates/Default.default.latte";i:2;i:1358419662;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"b7f6732 released on 2013-01-01";}}}?><?php

// source file: /Applications/XAMPP/xamppfiles/htdocs/good/app/AdminModule/templates/Default.default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'kgzfjti255')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbac116d613e_title')) { function _lbac116d613e_title($_l, $_args) { extract($_args)
?>Admin dashboard<?php
}}

//
// block navigation
//
if (!function_exists($_l->blocks['navigation'][] = '_lb53677868ce_navigation')) { function _lb53677868ce_navigation($_l, $_args) { extract($_args)
;
}}

//
// block sidebar
//
if (!function_exists($_l->blocks['sidebar'][] = '_lbbb2d0315b9_sidebar')) { function _lbbb2d0315b9_sidebar($_l, $_args) { extract($_args)
;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7dc858787e_content')) { function _lb7dc858787e_content($_l, $_args) { extract($_args)
?>	<div class="well">
		<h1>Admin dashboard</h1>
		<p>Nam at ante nec tellus consequat accumsan quis quis velit. Phasellus dignissim viverra dui, sit amet mollis ipsum pharetra at. Fusce sodales auctor dictum. Nullam et turpis eu felis lacinia adipiscing in id tellus. Pellentesque tristique neque nisi, sed tincidunt diam. Cras pulvinar, quam sed pulvinar tempor, odio odio placerat neque, ac dapibus justo eros sit amet tortor. Maecenas convallis mauris a risus imperdiet sed eleifend magna suscipit.</p>

		<h3>Pellentesque tempor elementum rutrum</h3>
		<p>Nullam venenatis, odio quis lacinia dictum, diam urna iaculis arcu, sit amet volutpat massa ante non arcu. Nulla id dui urna. Suspendisse eu velit dolor, ut posuere metus. Donec mattis pretium adipiscing. Integer nec congue diam. Proin nec velit sed orci fermentum ultricies id nec mauris. Nam sodales nisl ut orci iaculis id gravida augue adipiscing. Proin non leo ut nunc semper consectetur in ac lorem.</p>

		<ul>
			<li>Aenean volutpat</li>
			<li>Cras id lorem sapien</li>
			<li>Duis a purus nisl</li>
			<li>Praesent vitae nisl</li>
		</ul>
		<p>Quisque turpis tortor, faucibus a tempus et, fermentum et lectus.</p>
	</div><?php
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




<?php call_user_func(reset($_l->blocks['navigation']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['sidebar']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 