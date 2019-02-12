<?php
/**
 * finalize.php
 */
return function( $html, $supply ){
    $data = $supply['data']; // モジュールに入力されたデータが供給される。
    $src_tabs = '';
    foreach($data->fields->loop as $loop){
        $src_tabs .= '<div><a>'.htmlspecialchars($loop->fields->{'tab-label'}).'</a></div>';
    }

    /* ここに $html を加工するコードを書く。 */
    $html = preg_replace(
        '/'.preg_quote('<div class="px2-tabs__tabs"></div>', '/').'/s',
        '<div class="px2-tabs__tabs">'.$src_tabs.'</div>',
        $html
    );

    return $html;
};