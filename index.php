<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2008 Olivier Meunier and contributors
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

if (!empty($_POST))
{
	try
	{
		http::redirect($p_url.'&chk=1');
	}
	catch (Exception $e)
	{
		$core->error->add($e->getMessage());
	}
}

?>
<html>
<head>
	<title><?php echo __('System Information'); ?></title>
</head>

<body>
<?php
echo '<h2>'.html::escapeHTML($core->blog->name).' &rsaquo; '.__('System Information').'</h2>';

if (!empty($_GET['chk'])) {
	echo '<p class="message">'.__('All is going well.').'</p>';
}

echo
'<form action="'.$p_url.'" method="post">'.
'<p>'.$core->formNonce().'<input type="submit" value="'.__('Check').'" /></p>'.
'</form>';

?>
</body>
</html>