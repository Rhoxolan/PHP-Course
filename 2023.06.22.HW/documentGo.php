<?

function document_go($key, $links)
{
    if (isset($_GET[$key]) && array_key_exists($_GET[$key], $links)) {
        $param = $_GET[$key];
        include($links[$param]);
    }
}
