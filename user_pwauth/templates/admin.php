<?php
/*
            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document, and changing it is allowed as long
 as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. You just DO WHAT THE FUCK YOU WANT TO.

*/
?>
<div id="user_pwauth" class="section">
	<h2>Unix User Authentication</h2>
	<p>
	<label for="pwauth_path"><?php p($l->t('pwauth_path')); ?></label><input type="text" id="pwauth_path" name="pwauth_path" value="<?php p($_['pwauth_path']); ?>" />
	</p><p>
	<label for="uid_list"><?php p($l->t('uid_list')); ?></label><input type="text" id="uid_list" name="uid_list" value="<?php p($_['uid_list']); ?>"  original-title="<?php p($l->t('uid_list_original-title')); ?>"/>
	</p>
</div>
