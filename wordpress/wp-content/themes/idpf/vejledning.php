<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?php query_posts('page_id=11'); /* assign page id */ ?>
<?php if(have_posts) : the_post(); /* start the loop */ ?>
<?php the_content(); /* prints the content */ ?>
<?php endif; /* end the loop */ ?>
</body>
</html>