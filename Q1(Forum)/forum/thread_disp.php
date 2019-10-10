<?php
/**
 *
 * Created by PhpStorm.
 * User: Anukkrit
 * Date: 14-12-2018
 * Time: 10:53 PM
 */

$sql = "SELECT
    topic_id,topic_subject,topic_date,topic_by
FROM
    topics";

$result = mysqli_query($sql);

if(!$result)
    echo "<script>alert('please try again later')</script>";
else
{
    if(mysqli_num_rows($result) == 0)
        echo "<script>alert('No thread available defined yet.')</script>";
    else
    {
        //table structure
        echo '<table border="1">
              <tr>
                <th></th>
                <th></th>
              </tr>';

        while($row = mysqli_fetch_assoc($result))
        {
            echo '<tr>';
            echo '<td class="leftpart">';
            echo '<h3><a href="thread_disp.php?id">' . $row['cat_name'] . '</a></h3>' . $row['cat_description'];
            echo '</td>';
            echo '<td class="rightpart">';
            echo '<a href=""></a> ';
            echo '</td>';
            echo '</tr>';
        }
    }
}
