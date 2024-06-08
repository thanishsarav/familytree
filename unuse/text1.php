<html>

<body>
    <?php
    include ("data.php");
    ?>
    <?php function displayFamily($family, $root = false)
    { ?>
        <ul <?php
        if ($root) {
            echo "id='myUL'";
        } else {
            echo "class='nested'";
        }
        ?>>
            <?php
            foreach ($family as $f) { ?>
                <li><span class="caret">
                        <?php echo $f['name']; ?>
                    </span>
                    <?php if (isset($f['children'])) {
                        displayFamily($f['children']);
                    } ?>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
    <?php
    displayFamily($ft, $root = true);
    ?>
<p>The main difference between the include and require functions in PHP is<br> that include will display a warning and continue the script execution if the file is not found,
    <br> while require will display a fatal error and halt the script execution.</p>
</body>

</html>