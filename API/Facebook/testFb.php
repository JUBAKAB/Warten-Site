<?php

  // Gestion de la class Facebook
    use Facebook\FacebookRequest;
  
  require_once __DIR__ . '/autoload.php';
  
  session_start();
  
    $fb = new Facebook\Facebook([
        'app_id'     => '170350160153384',
        'app_secret' => 'e0379ab13a74cc09ac725318ce15a96a',
        'default_graph_version' => 'v2.4',
    ]);
  
  // On garde le token par defaut
  $fb->setDefaultAccessToken('170350160153384|xh2T89hzriqWO4AC4-LxTm6cFqM');

  // On récupère les informations personnel
  $response = $fb->get('/100008652786346/posts?fields=id,message,created_time,picture,likes,shares');
  $posts = $response->getGraphEdge();
  $json = json_decode($posts, true);
  $posts = array_chunk($json, 20);
  foreach ($posts[0] as $post) {
    echo '<strong>#'.$post['id'].'</strong> '.count($post['likes']).' likes ('.$post['created_time']['date'].') : '.$post['message'].' : <img src="'.$post['picture'].'" /><br />';
    
  }