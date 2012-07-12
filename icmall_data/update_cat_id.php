<?php
/**
 * 把两个分类的ID对应起来
 */

require('../connect.php');

$sql = "SELECT id, className, parentId FROM classcategory WHERE 1";

$result = mysql_query($sql);

while ($row = mysql_fetch_row($result)) {
    $id = intval($row[0]);
    $cat_name = trim($row[1]);
    $parent_id = intval($row[2]);
    $ecs = get_cat_id($cat_name);

    echo $id . '----' . $cat_name . '------' . $ecs['cat_id'] . '---' . 
         $parent_id . '----' . $ecs['parent_id'] . '----' . $ecs['count'] . '<br />';
}



/**
 * 根据分类名称获取ecs_category的cat_id
 * @param string $cat_name
 * @return array
 */
function get_cat_id($cat_name = '') {
    if (!empty($cat_name)) {
        $sql = "SELECT COUNT(cat_id) FROM ecs_category WHERE cat_name='$cat_name'";
        $result = mysql_query($sql);
        $count = mysql_fetch_row($result);

        $sql = "SELECT cat_id,parent_id FROM ecs_category WHERE cat_name='$cat_name'";
        $result = mysql_query($sql);
        $cat_id = mysql_fetch_row($result);

        return array('cat_id'=>$cat_id[0], 'parent_id'=>$cat_id[1], 'count'=>$count[0]);
    }
}
