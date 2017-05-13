<?php
/*
Template Name: resources
*/


get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php

            if (is_user_logged_in()):

                global $wpdb;
                $resource = $wpdb->get_results("SELECT * FROM resource;");

                echo "<table border='1' align=\"middle\">";
                echo "<th>No</th>";
                echo "<th>Name</th>";
                echo "<th>Author</th>";
                echo "<th>Subject</th>";
                echo "<th>Type</th>";
                echo "<th>Description</th>";

                foreach($resource as $resource){
                    echo "<tr>";
                    echo "<td>".$resource->Resource_ID."</td>";
                    echo "<td>".$resource->Resource_Name."</td>";
                    echo "<td>".$resource->Resource_Author."</td>";
                    echo "<td>".$resource->Resource_Subject."</td>";
                    echo "<td>".$resource->Resource_Type."</td>";
                    echo "<td>".$resource->Resource_Description."</td>";

                    echo "</tr>";
                }
                echo "</table>";
            else:
                echo "You need to login first to view this content";
            endif;

            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
