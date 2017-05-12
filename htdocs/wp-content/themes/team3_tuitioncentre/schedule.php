<?php
/*
Template Name: schedule
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php
                global $wpdb;
                $lesson = $wpdb->get_results("SELECT * FROM lesson;");

                echo "<table border='2'>";
                echo "<th>Lesson Name</th>";
                echo "<th>Lesson Type</th>";
                echo "<th>Date of the Lesson</th>";
                echo "<th>Time of the Lesson</th>";
                echo "<th>Lesson Location</th>";
                foreach($lesson as $lesson){
                    echo "<tr>";

                    echo "<td>".$lesson->Lesson_Name."</td>";
                    echo "<td>".$lesson->Lesson_Type."</td>";
                    $date = $lesson->Lesson_Date;
                    echo "<td>".date("d-m-Y", strtotime($date))."</td>";

                    $time = $lesson->Lesson_Time;
                    echo "<td>".date("h:m", strtotime($time))."</td>";
                    echo "<td>".$lesson->Lesson_Location."</td>";

                    echo "</tr>";
                }
                echo "</table>";
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
