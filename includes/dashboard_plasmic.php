<?php
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://codegen.plasmic.app/api/v1/loader/html/preview/tx1FVWH5cw4xwL5KkDKY4z/Homepage?hydrate=1&embedHydrate=1");
// Provide the project ID and public API token.
curl_setopt($curl, CURLOPT_HTTPHEADER, array(
  "x-plasmic-api-project-tokens: tx1FVWH5cw4xwL5KkDKY4z:RDbBzjouemyz8GXoNb9sB10IM2Vy0yhyjY3zVJrrhWQ2zpXh2rzO5rs7HuF8Fe3VxVQ236uu9g7emqBsZQ"
));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
curl_close($curl);

$result = json_decode($response);
echo $result->html;
?>