<!DOCTYPE html>
<html>
    <body>
        <?php 
        $myBool = true;
        $myNum = 5;
        $myText = "woo!";
        $myDec = 10.365;
        ?>

        <table> 
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
            <tr>
                <td>
                    <?php
                    echo gettype($myBool);
                    ?>
                </td>
                <td>myBool</td>
                <td>
                    <?php
                    echo $myBool;
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo gettype($myNum);
                    ?>
                </td>
                <td>myNum</td>
                <td>
                    <?php
                    echo $myNum;
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo gettype($myText);
                    ?>
                </td>
                <td>myText</td>
                <td>
                    <?php
                    echo $myText;
                    ?>
                </td>
            </tr>

            <tr>
                <td>
                    <?php
                    echo gettype($myDec);
                    ?>
                </td>
                <td>myDec</td>
                <td>
                    <?php
                    echo $myDec;
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>