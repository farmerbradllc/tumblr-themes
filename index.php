<html>
<head>

</head>

<body>
    <?php

	$request_url = "http://bwoodx3.tumblr.com/api/read?type=post&start=0&num=1";
    $xml = simplexml_load_file($request_url);

    $title = $xml->posts->post->{'regular-title'};

    $post = $xml->posts->post->{'regular-body'};

    $link = $xml->posts->post['url'];

    $small_post = substr($post,0,320);

    echo '<h1>'.$title.'</h1>';

    echo '<p>'.$small_post.'</p>';

    echo "…";

    echo "</br><a target=frame2 href='".$link."'>Read More</a>"; 

    ?>
</body>
</html>