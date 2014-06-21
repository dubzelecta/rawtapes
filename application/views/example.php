<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <?php
        if (isset($output)) {
            foreach ($css_files as $file):
                ?>
                <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
            <?php endforeach; ?>
            <?php foreach ($js_files as $file): ?>
                <script src="<?php echo $file; ?>"></script>
            <?php endforeach; ?>

        <?php } ?>
        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <h1 style="text-align:center;">Raw Tapes Admin</h1>
        <?php $this->load->view('example_header'); ?>
        <div style='height:20px;'></div>  
        <div>
            <?php
            if (isset($output)) {
                echo $output;
            }
            ?>
        </div>
    </body>
</html>
