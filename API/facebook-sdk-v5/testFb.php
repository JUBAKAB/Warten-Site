<?php 
use Facebook\FacebookRequest;



/* PHP SDK v5.0.0 */
/* make the API call */
$request = new FacebookRequest(
  $session,
  'GET',
  '/379620812382153/feed'
);
$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
?>