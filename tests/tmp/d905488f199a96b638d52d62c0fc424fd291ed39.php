<?php
/* Generated from ./assert_templates/nested_block_second_parent_override.tpl */
function haanga_d905488f199a96b638d52d62c0fc424fd291ed39($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    $buffer1  = "";
    $buffer2  = "";
    $buffer2 .= "\n    2.1-overrided\n";
    $blocks["inner2_1"]  = (isset($blocks["inner2_1"]) == TRUE ? (strpos($blocks["inner2_1"], "{{block.1b3231655cebb7a1f783eddf27d254ca}}") === FALSE ? $blocks["inner2_1"] : str_replace("{{block.1b3231655cebb7a1f783eddf27d254ca}}", $buffer2, $blocks["inner2_1"])) : $buffer2);
    $buffer1 .= Haanga::Load("assert_templates/nested_block_second_parent.tpl", $vars, TRUE, $blocks);
    if ($return == TRUE) {
        return $buffer1;
    } else {
        echo $buffer1;
    }
}