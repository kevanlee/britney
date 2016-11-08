<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package britney
 */

get_header(); ?>

<!-- begin masthead -->
<canvas id="canvas-basic"></canvas>
<div id="masthead">
  <div class="intro-text">
    <h2 class="opening"><b>Hi, I'm Kevan.</b> <br>I'll tell you everything I know about content marketing for startups.
    </h2>
    <p>I lead the marketing team at <a href="https://buffer.com">Buffer</a>, a SaaS tool with a blog of over 1.2M monthly visits. Let me show you how we got there and how we plan to grow.
    </p>
    <a href="#contact" class="btn">Say Hello &nbsp; &#x1F64C; </a>
  </div>
</div><!-- end masthead -->

<?php
get_sidebar();
get_footer();
