<html>
<head>
<meta http-equiv='Content-type' content='text/html; charset=UTF-8' />
</head>
<body>
<?php
    echo "quoc";
    $rss = new DOMDocument();
    $rss->load('http://vnexpress.net/rss/oto-xe-may.rss');
    $feed = array();
    foreach($rss->getElementsByTagName('item') as $node)
     {
        $item = array (
                    'title' =>$node->getElementsByTagName('title') -> item(0)->nodeValue,
                    'desc' => $node->getElementsByTagName('description') -> item(0)->nodeValue,
                    'link' => $node->getElementsByTagName('link') -> item(0)->nodeValue,
                    'date' => $node->getElementsByTagName('pubDate') -> item(0)->nodeValue
                    );
        array_push($feed,$item);
    }
    
    for($x = 0; $x < count($feed); $x ++)
    {
        $title = str_replace('&','&amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $description = $feed[$x]['desc'];
        $date = date('l F d, Y', strtotime($feed[$x]['date']));
        echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br/>';
        echo '<small><em>Posted on '.$date.'</em></small></p>';
        echo '<p>'.$description.'</p>';
    }
?>
</body>
</html>