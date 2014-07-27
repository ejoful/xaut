<?php
/**
 * Description of function
 *
 * @author lamp
 */
function smarty_function_getUserInfo($params, $template) {
        $user = D('user');
        $user->where($params['uid'])->find();
}
?>
